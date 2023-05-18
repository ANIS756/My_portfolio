<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    private $blog;
    public function add(){
        return view('admin.blog.add');
    }

    public function create(Request $request){

        Blog::createBlog($request);
        return back()->with('success',"Successfully Created");

    }

    public function manage(){

        return view('admin.blog.manage',
        ['blogs' => Blog::all()]);
    }

    public function edit($id){
        $this->blog = Blog::find($id);
        return view('admin.blog.edit',['blog'=>$this->blog]);
    }

    public function update(Request $request , $id){

        Blog::updateBlog($request, $id);
        return redirect()->route('manage-blog')->with('success',"Successfully Updated");
    }
    public function delete($id){
        $this->blog =Blog::find($id);
        if (file_exists($this->blog->image)){
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->route('manage-blog')->with('success','Successfully Deleted');

    }


}
