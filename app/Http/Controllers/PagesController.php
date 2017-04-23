<?php
namespace App\Http\Controllers;
use App\Post;
class PagesController extends Controller{
	public function getIndex(){
		#process varibale data or params
		#talk to model
		#recieve from the model
		#compile or process data from the model if needed
		#pass that data to the correct view
		$post=Post::orderBy('created_at','desc')->limit(4)->get();
    return view('pages.welcome')->with('posts',$post);
	}
	public function getAbout(){
		// $first='Rasik';
		// $last='Kunwar';
		// $full=$first . " " . $last;
		// $email='rasikkunwar31@gmail.com';
		// $data=[];
		// $data['name']=$full;
		// $data['email']=$email;

		//return view('pages.about')->with('fullname',$full)->with('email',$email);
        return view('pages.about');
        // return view('pages.about')->withData($data);

	}
	public function getContact(){
		return view('pages.contact');

	}

}
?>