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
        $questions = Question::all();
        $count = sizeof($questions);
        $answers = Answer::all();
        $rol = Auth::user()->role;
        $marks =Question::whereright_answer(1)->get();

        return view('home')->with('questions',$questions)
            ->with('count',$count)
            ->with('role',$rol)
            ->with('mark',sizeof ($marks)* 2)
            ->with ('answers',$answers);
    }
    public function questions(){

        $questions = Question::wheremarked(0)->get();
        return Response::json($questions);
    }
    public function getAnswers(Request $request){
        $answer = Answer::wherequestion_id($request->get('id'))->get();
        return Response::json($answer);
    }
    public function addAnswer($id){
        $answer = Answer::wherequestion_id($id)->get();

        return view('add_answer')->with('q_id',$id)->with('answers',$answer);
    }
    public function addQuestion(Request $request){
        $error_map =[];
        $questions = Question::all();
        $count = sizeof($questions);
        if($count == 10){
            $error_map[] = 'Ten Questions are the limit for one Test';
        }
        if(!$request->has ('choice_one')){
            $error_map[] = 'choice one required';
        }else if(!$request->has ('choice_two')){
            $error_map[] = 'choice two required';
        }else if(!$request->has ('choice_three')){
            $error_map[] = 'choice three required';
        }else if(!is_numeric ($request->get('choice_one'))){
            $error_map[] = 'choice one should be a number between 0 and 1';
        }else if(!is_numeric ($request->get('choice_two'))){
            $error_map[] = 'choice two should be a number between 0 and 1';
        }else if(!is_numeric ($request->get('choice_three'))){
            $error_map[] = 'choice three should be a number between 0 and 1';
        }
        if(sizeof ($error_map)> 0){
            return Response::json($error_map);
        }
        //TODO validate in choice given in put are numbers and
        $question = Question::create(['question'=>$request->get('question')]);
        $question_id = $question->id;
        Answer::create([
            'answer'=>$request->get('answer_one'),
            'question_id'=>$question_id ,
            'marked'=>$request->get('choice_one')
        ]);
        Answer::create([
            'answer'=>$request->get('answer_two'),
            'question_id'=>$question_id ,
            'marked'=>$request->get('choice_two')
        ]);
        Answer::create([
            'answer'=>$request->get('answer_three'),
            'question_id'=>$question_id ,
            'marked'=>$request->get('choice_three')
        ]);
        return redirect()->to('home');
    }
    //TODO to calculate point we need to have all answered option and match with the real right choice and count multipy it with 2 to get out of 20
    public function saveAnswer($question_id,$answer_id){
        $is_answer_marque_as_right = Answer::find($answer_id)->first()->marked;
        $a =  Question::find($question_id);
        $a->marked = true;
        $a->right_answer = $is_answer_marque_as_right;
        $a->save ();
        return redirect()->to('home');
    }
    public function getMarks(){
        $marks =Question::whereright_answer(1)->get();
        return Response::json(['mark'=> sizeof($marks) * 2]);
    }
    public function saveAnswerApi(Request $request){
        $is_answer_marque_as_right = Answer::find($request->get('answer_id'))->first()->marked;
        $a =  Question::find($request->get('question_id'));
        $a->marked = true;
        $a->right_answer = $is_answer_marque_as_right;
        $a->save ();
        return Response::json(['status'=>200]);
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
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
