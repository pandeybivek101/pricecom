<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Blog;
use Cloudinary;
use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //$blogs=Blog::all();
       $blogs=DB::table('blogs')
       ->join('users', 'users.id', '=', 'blogs.user_id')
       ->select('blogs.*', 'users.name')->get();
        return view('admin.view-blog')->with(compact('blogs'));
        
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.add-blog');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->isMethod('post')){
            $data=$request->all();
            $blog=new Blog();
            $blog->tags=$data['tags'];
            $blog->title=$data['title'];
            $blog->content=$data['content'];
            if ($data['image']){
                $name=cloudinary()->upload($data['image']->getRealPath())->getFileName();   
            }
            $blog->image=$name;
            $blog->user_id=Auth::id();
            $blog->save();
            return redirect()->back()->withSuccess('Successfully Added');


        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = Blog::findorfail($id);
        return view('admin.edit-blog')->with(compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=$request->all();
        $filename = $request->hasfile('image') ? cloudinary()->upload($data['image']->getRealPath())->getFileName() : $data['old_image'];
        Blog::where('id', $id)->update([
            'title'=>$data['title'],
            'content'=>$data['content'],
            'image'=>$filename,
            'tags'=>$data['tags'],
        ]);
        
        return redirect()->back()->withSuccess('successfully added');
    }

    /**
    *
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog = Blog::where('id', $id)->delete();
        return redirect()->back();
    }
}

//end of destroy function

