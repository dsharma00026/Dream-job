<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use  App\Models\UserData;

class MainController extends Controller
{
    //
    //here  we handle all backend related to register
    function register(Request $request){
      
      //here we apply validation into form field
       $request->validate([
        'user_name'     => 'required|string|min:3|max:50',
        'user_email'    => 'required|email|unique:userdata,user_email',
        'user_password' => 'required|string|min:6',
        'user_age'      => 'required|digits:2|numeric',
        'user_mobile'   => 'required|digits:10|numeric',
        'user_city'     => 'required|string',
        'user_about'    => 'required|string|min:10|max:500'
      ]);

     //here we ragister new user into database
     $user = new UserData();
     $user->user_name       = $request->user_name;
     $user->user_email      = $request->user_email;
     $user->user_age        = $request->user_age;
     $user->user_mobile     = $request->user_mobile;
     $user->user_city       = $request->user_city;
     $user->user_password   = Hash::make($request->user_password);//here we hash password for sequreity
     $user->user_about      = $request->user_about;


     //here we save data in databse and move user froward to designation page with session message 
     if($user->save()){
       return redirect()->route('login.form')->with('success','Register Succesfylly! now please login');
      }else{
        return redirect()->route('register.form')->with('failed', 'Something went wrong!');
      }



    }

    //here we handle all backend related to login
    function login(Request $request){
      if(session('user_id')){
        return redirect()->route('home');

      }else{

      
      //here  we apply validation of check user input correct or not
        $request->validate([
            'user_email'  => 'required|email',
            'user_password'   => 'required',
        ]);

         //get user data based on email
          $user = Userdata::where('user_email', $request->user_email)->first();

          //here we check fetch data password to user enter passwrod
        if ($user && Hash::check($request->user_password, $user->user_password)) {
             // ✅ Login successful
             $request->session()->regenerate();//for prevent session attack
             //create session
             session(['user_name' =>$user->user_name]);
             session(['user_id'=>$user->id]);
             //move dashboard page
        return redirect()->route('home');
        } else {
        // ❌ Email not found or password incorrect
        return redirect()->route('login.form')->with('failed','Invalid crendentials');
        }
      }
    }







    function home(){
      //here we check user logged in or not 
        if(session('user_id')){
            //here we check user is logged in 
          $jobs=[];
          return view('home',['jobs'=>$jobs]);
        }else{
          //here we check user not logged in
          return redirect()->route('login.form')->with('failed','Please login first');
        }

    } 



    function profile(){
      $user = [ 
        'name' => 'Deepak Sharma',
        'email' => 'deepak@example.com',
        'mobile' => '9876543210',
        'city' => 'Ludhiana'
     ];
      return view('profile',compact('user'));



     }


    function editprofile(){
         $user = [
        'name' => 'Deepak Sharma',
        'email' => 'deepak@example.com',
        'age' => 24,
        'mobile' => '9876543210',
        'city' => 'Ludhiana'
    ];

    return view('edit-profile', compact('user'));
    }
    

    function viewjob($id){
       $job = [
        'id' => $id,
        'title' => 'Software Engineer',
        'company' => 'Tech Corp',
        'location' => 'Mohali',
        'salary' => 25000,
        'posted_on' => '26/06/2025',
        'description' => 'We are hiring a skilled software engineer...'
    ];

    return view('view-details', compact('job'));
    }
    
}
