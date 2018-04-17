<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Response;
use App\Account;
class AccountController extends Controller
{
    public function index(Request $request){

        Log::debug($request->all ());

//        if($request->has ('user_id')){
//
//            $account = new Account;
//            $account->value = $request['name'];
//            $account->text = $request['name'];
//            $account->user_id = $request['user_id'];
//            $account->parent_id =  1;
//
//            $account->save ();
//
//
//            return Response::json($account);
//        }else{
//            return Response::json(['message'=>'sorry click on create account button']);
//        }

    }
    public function getAccount(){

         $tree = Account::get()->toTree();
         return $tree;
//        $accounts = Account::with('children')->paginate(30);
//        return $accounts;
    }
}
