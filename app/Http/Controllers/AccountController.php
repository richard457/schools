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


        if($request['name'] != null){

                if(array_key_exists ('id',$request->all()['selected_parent'][0])){
                    if($request->has ('user_id')) {
                        $account = new Account;

                        $account->value = $request['name'];
                        $account->text = $request['name'];
                        $account->user_id = $request['user_id'];
                        $account->parent_id = $request->all ()['selected_parent'][0]['id'];
                        $account->save ();
                        return Response::json ($account);
                    }
                }else{
                    if($request->has ('user_id')) {
                        $account = new Account;
                        $account->value = $request['name'];
                        $account->text = $request['name'];
                        $account->user_id = $request['user_id'];
                        $account->parent_id = 1; //TODO get parent of all parent then use that one
                        $account->save ();
                        return Response::json ($account);
                    }
                };

        }else{
            //name omitted and there should be no real existing object selected!
            if(!array_key_exists ('id',$request->all()['selected_parent'][0])){

                if($request->has ('user_id')) {

                    foreach ($request->all()['selected_parent'] as $acc){
                        $account = new Account;
                        $account->value = $acc['name'];
                        $account->text = $acc['name'];
                        $account->user_id = $request['user_id'];
                        $account->parent_id = 1; //TODO get parent of all parent then use that one
                        $account->save ();

                    }
                    return Response::json ($account);

                }
            }

        }


    }
    public function getAccount(){

         $tree = Account::get()->toTree();
         return $tree;
    }
}
