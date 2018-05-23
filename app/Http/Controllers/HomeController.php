<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use Log;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        $answers = Answer::all();

        return view('home')->with('questions',$questions)->with ('answers',$answers);
    }
    public function questions(Request $request){
        
        Question::create([
            'question'=>$request->get('question')
        ]);
        
        return redirect()->to('home');
    }
    public function addAnswer($id){
        $answer = Answer::wherequestion_id($id)->get();
        return view('add_answer')->with('id',$id)->with('answers',$answer);
    }
    public function addQuestion(Request $request){
        Log::debug($request->all());
    }
    public function saveAnswer($question_id){

        Log::debug($question_id);
        $a =  Question::find($question_id)->first();
        $a->marked = true;
        $a->save ();
    }
}
