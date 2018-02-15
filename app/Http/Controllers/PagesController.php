<?php
/*$class = '\\'.ltrim($this->model, '\\');*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
/*use Auth;*/

class PagesController extends Controller
{
    public function home(){
        return view("home");
    }

    public function signup(){
        return view("signup");
    }

    public function register(Request $request){
        $this->validation_signup($request);
        User::create($request->all());
        return redirect("/")->with('registered_status',"you are registered successfully");
    }

    public function validation_signup($request){
        $validatedData = $request->validate([
            'first_name' => 'required|max:191',
            'last_name' => 'required|max:191',
            'address' => 'required|max:191',
            'email'=> 'required|email|max:191',
            'phone_number'=> 'required|max:191',
            'username'=> 'required|unique:users,username|max:191',
            'password'=> 'required|confirmed|max:191',
        ]);

        return $validatedData;
    }

    public function signin(){
        return view("signin");
    }

    public function signinpost(Request $request){
        $username=$request->username;
        $password=$request->password;

        $results = User::select('select * from users where username = $username and password=$password', array(1));
/*        return $results;
        if (count($results)>0){
            return signin;
        }else{
            return notsignin;
        }*/

/*        $this->validate($request,[
            'username'=> 'required|max:191',
            'password'=> 'required|max:191',
        ]);*/

/*        if (Auth::attempt(["username"=>$request->username,"password"=>$request->password])){
            return "signed in";
        }
        return "not logged in";*/
    }

    public function registerbusiness(){
        return view("registerbusiness");
    }



}
