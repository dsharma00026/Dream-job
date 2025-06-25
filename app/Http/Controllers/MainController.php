<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
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
    
    
}
