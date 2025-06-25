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
    function login(){
      
    }







    function home(){
         $jobs = [
        [   
            'id' => 1,
            'title' => 'Software Engineer',
            'company' => 'Tech Corp',
            'location' => 'Mohali',
            'salary' => 25000
        ],
        [
            'id' => 2,
            'title' => 'Web Developer',
            'company' => 'CodeSoft',
            'location' => 'Ludhiana',
            'salary' => 20000
        ],
        [
            'id' => 3,
            'title' => 'UI/UX Designer',
            'company' => 'Designify',
            'location' => 'Amritsar',
            'salary' => 22000
        ],
          [
            'id' => 3,
            'title' => 'UI/UX Designer',
            'company' => 'Designify',
            'location' => 'Amritsar',
            'salary' => 22000
        ],
          [
            'id' => 3,
            'title' => 'UI/UX Designer',
            'company' => 'Designify',
            'location' => 'Amritsar',
            'salary' => 22000
        ],
          [
            'id' => 3,
            'title' => 'UI/UX Designer',
            'company' => 'Designify',
            'location' => 'Amritsar',
            'salary' => 22000
        ],
        ];

        return view('home',['jobs'=>$jobs]);

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
