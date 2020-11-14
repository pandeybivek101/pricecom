<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Redirect,Response;

class CalenderController extends Controller
{
    //

    public function index()
    {
        if(request()->ajax()) 
        {
 
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
         return Response::json($data);
        }
        return view('admin.fullcalendar');
    }
    
   
    public function create(Request $request){  
        $data=$request->all();
        $event=new Event();
        $event->title=$data['title'];
        $event->start=$data['amp;start'];
        $event->end=$data['amp;end'];
        $event->save();
        return Response::json($event);
    }
     
 
    public function update(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);
 
        return Response::json($event);
    } 
 
 
    public function delete(Request $request)
    {
        $data=$request->all();
        $event = Event::where('id',$data['amp;id'])->delete();
        return Response::json($event);
    }    
 
 

}
