<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store on it data from database
       // $post=Post::all();
        $post=Post::orderBy('id','desc')->paginate(5);
        return view('posts.index')->with('posts',$post);
        
        //return to view with above variable(pass above variable)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('posts.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
                'title' => 'required||max:255',
                'body' => 'required',
                'slug' =>'required|alpha_dash|min:6|max:255',
                'category_id' =>'required|max:255|integer'
            ));
        // store on the database
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id=$request->category_id;
        $post->slug= $request->slug;
        $post->save();
       
        // redirect to another page according to requirements
        Session::flash('success','Post has been succcessfully created');
         return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        //fetch the data from database and store on our varable
        $post=Post::find($id);
        //return to the view with data stored on our variable
        return view('posts.show') ->with('post',$post);
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
        //Take the data from the data for the passes id and store on the variable made
        $post=Post::find($id);
        $categories=Category::all();
        $cats=[];
        foreach ($categories as $category) {
            $cats[$category->id]=$category->name;
        }
        //return to the view with data on variable
        return view('posts.edit')->with('posts',$post)->with('categories',$cats);
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
        $post=Post::find($id);

        //validate the data
        if ($request->slug == $post->slug) {
            $this->validate($request,array(
                'title' => 'required|max:255',
                'body' => 'required',
                'category_id'=>'required|max:255|integer'
                

            ));
        }
        else{
        $this->validate($request,array(
                'title' => 'required|max:255',
                'body' => 'required',
                'slug' =>'required|alpha_dash|min:6|max:255|unique:posts,slug',
                'category_id'=>'required|max:255|integer'

            ));
            }
        //save it on database
        $post=Post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->category_id=$request->category_id;
        $post->slug=$request->slug;
        $post->save();
        //set flash message 
        Session::flash('success','Post has been successfully updated');

        //redirect to show with flash message
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post=Post::find($id);
        Session::flash('success','Post has been successfully deleted');
        $post->delete();
        return redirect()->route('post.index');
    }
}
