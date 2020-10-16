<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;


class WebsiteController extends Controller
{
    
    public function store(Request $request)
    {
        //
        if($request->isMethod('post')){
            $data=$request->all();
            $website=new Website();
            $website->name=$data['name'];
            $website->url=$data['url'];
            $website->logo_url=$data['logo_url']; 
            $website->save();
            return redirect()->back();   
        }
        return view('admin.add-website');
        
    }

    
    public function show()
    {
        //
        $websites=Website::all();
        return view('admin.view-website')->with(compact('websites'));
    
    }

    
 
    public function update(Request $request, $id)
    {
        $website=Website::findorfail($id);
        if($request->isMethod('post')){
            $data=$request->all();
            $name=$data['name'];
            $url=$data['url'];
            $logo_url=$data['logo_url'];
            Website::where('id', $id)->update([
                'name'=>$name,
                'url'=>$url,
                'logo_url'=>$logo_url,
            ]);
            return redirect()->back();   
        }
        return view('admin.update-website')->with(compact('website'));
    }

    
    public function destroy($id)
    {
        //
        perform_delete($id, Website::class);
        return redirect()->back();
    }
}
