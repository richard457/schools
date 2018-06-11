<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Response;
use Log;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('home')->with('posts',$posts);
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    public function saveDetails(Request $request){
        $post = Post::find($request->get('id'));
        $post->image_type = $request->get('image_type');
        $post->description = $request->get('description');
        $post->region = $request->get('region');
        $post->lat = $request->get('latitude');
        $post->long = $request->get('longitude');
        $post->save();
        return redirect()->to('home');
    }
    public function getImages(Request $request){
        $request->has('region')?$region = $request->get('region'): $region='gakenke';
        $posts = Post::whereimage_type($request->get('image_type'))->whereregion($region)->get();
        return Response::json($posts);
    }
    public function removeImage($id){
        Post::find($id)->delete();
        return redirect()->to('home');
    }
    public function showAddDetail($id){
        return view('details')->with('id', $id);
    }
    public function upload(Request $request){
        $path = $request->file('picture')->storePublicly('avatars');
         Post::create([
            'image_url'=>Storage::url($path)
         ]);
         $posts = Post::all();
         return redirect()->to('home')->with('posts',$posts);
    }

}
