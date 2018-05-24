<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
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

        return view('home')->with('questions',$questions)
            ->with('count',$count)
            ->with ('answers',$answers);
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

        $error_map =[];
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
    //TODO to calculate point we need to have all answerd option and match with the real right choice and count multipy it with 2 to get out of 20
    public function saveAnswer($question_id){
        $a =  Question::find($question_id)->first();
        $a->marked = true;
        $a->save ();
    }
}
