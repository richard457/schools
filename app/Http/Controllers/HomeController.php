<?php

namespace App\Http\Controllers;

use App\DefaultQuestion;
use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use Illuminate\Support\Facades\Auth;

use Response;
use Log;
use App\User;
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
    public function loginApi(Request $request){
        $user = User::whereemail($request->get('email'))->first();
        if($user){
            return Response::json(['email'=>$user->email]);
        }
        else{
            return Response::json(['email'=>'null']);
        }
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $answer = 'subiza';
        $add_test = 'Ongeramo';
        $log_out = 'Sohoka';
        $no_question = 'Nta bibazo ongeramo';
        $lang = $request->get('lang');
        $default_questions = DefaultQuestion::all();
        if(!isSet($lang)){
           $lang = 'kin';
        }
        if($lang == 'king'){
            $answer = 'subiza';
            $add_test = 'Ongeramo';
            $log_out = 'Sohoka';
            $no_question = 'Nta bibazo ongeramo';
        }else if($lang == 'fr'){
            $answer = 'Repondre';
            $add_test = 'Ajouter l\'exam';
            $log_out = 'deconnexion';
            $no_question = 'Ajouter plus';
        }else if($lang == 'eng'){
            $answer = 'Respond';
            $add_test = 'Add Test';
            $log_out = 'Log out';
            $no_question = 'No Question add more';
        }
        if($lang){
            $questions = Question::wherelang($lang)->get();
            $count = sizeof($questions);
            $answers = Answer::all();
            $rol = Auth::user()->role;
            $marks =Question::whereright_answer(1)->wherelang($lang)->get();
            return view('home')->with('questions',$questions)
                ->with('count',$count)
                ->with('role',$rol)
                ->with('answer',$answer)
                ->with('log_out',$log_out)
                ->with('add_test',$add_test)
                ->with('no_question',$no_question)
                ->with('default_questions',$default_questions)
                ->with('mark',sizeof ($marks)* 2)
                ->with ('answers',$answers);
        }else{
            $questions = Question::all();
            $count = sizeof($questions);
            $answers = Answer::all();
            $rol = Auth::user()->role;
            $marks =Question::whereright_answer(1)->get();

            return view('home')->with('questions',$questions)
                ->with('count',$count)
                ->with('role',$rol)
                ->with('answer',$answer)
                ->with('log_out',$log_out)
                ->with('no_question',$no_question)
                ->with('add_test',$add_test)
                ->with('default_questions',$default_questions)
                ->with('mark',sizeof ($marks)* 2)
                ->with ('answers',$answers);
        }

    }
    public function questions(Request $request){
        $questions = Question::wheremarked(0)->wherelang($request->get('lang'))->get();
        return Response::json($questions);
    }
    public function getAnswers(Request $request){

        $answer = Answer::wherequestion_id($request->get('id'))->wherelang($request->get('lang'))->get();
        return Response::json($answer);
    }
    public function addAnswer($id,$lang='kin'){
        $answer = Answer::wherequestion_id($id)->wherelang($lang)->get();
        return view('add_answer')->with('q_id',$id)->with('answers',$answer);
    }
    public function addQuestion(Request $request){
        $error_map = [];
        $questions = Question::all();
        $count = sizeof($questions);
        if($count == 10){
            $error_map[] = 'Ten Questions are the limit for one Test';
        }
        if(!$request->has ('lang')){
            $error_map[] = 'you need to have language param set';
        }else if(!$request->has ('choice_one')){
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
        $question = Question::create(['question'=>$request->get('question'),'lang'=>$request->get('lang')]);

        $question_id = $question->id;
        Answer::create([
            'answer'=>$request->get('answer_one'),
            'lang'=>$request->get('lang'),
            'question_id'=>$question_id ,
            'marked'=>$request->get('choice_one')
        ]);
        Answer::create([
            'answer'=>$request->get('answer_two'),
            'lang'=>$request->get('lang'),
            'question_id'=>$question_id ,
            'marked'=>$request->get('choice_two')
        ]);
        Answer::create([
            'answer'=>$request->get('answer_three'),
            'lang'=>$request->get('lang'),
            'question_id'=>$question_id ,
            'marked'=>$request->get('choice_three')
        ]);
        return redirect()->to('home');
    }
    //TODO to calculate point we need to have all answered option and match with the real right choice and count multipy it with 2 to get out of 20
    public function saveAnswer($question_id,$answer_id,$lang='kin'){
        $is_answer_marque_as_right = Answer::find($answer_id)->first()->marked;
        $a =  Question::find($question_id);
        $a->marked = true;
        $a->lang = $lang;
        $a->right_answer = $is_answer_marque_as_right;
        $a->save ();
        return redirect()->to('home');
    }
    public function getMarks($lang='kin'){
        $marks =Question::whereright_answer(1)->wherelang($lang)->get();
        return Response::json(['mark'=> sizeof($marks) * 2]);
    }
    public function saveAnswerApi(Request $request){
        $is_answer_marque_as_right = Answer::find($request->get('answer_id'))->first()->marked;
        $a =  Question::find($request->get('question_id'))->wherelang($request->get('lang'));
        $a->marked = true;
        $a->right_answer = $is_answer_marque_as_right;
        $a->save ();
        return Response::json(['status'=>200]);
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
