<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use  App\Models\UserData;
use  App\Models\Contact;
use  App\Models\Job;
use App\Models\Application;
use PhpParser\Node\Stmt\Return_;

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
  
      //here  we apply validation of check user input correct or not
        $request->validate([
            'user_email'  => 'required|email',
            'user_password'   => 'required',
        ]);

         //get user data based on email
          $user = Userdata::where('user_email', $request->user_email)->first();

          //here we check fetch data password to user enter passwrod
        if ($user && Hash::check($request->user_password, $user->user_password)) {
             //  Login successful
             $request->session()->regenerate();//for prevent session attack
             //create session
             session(['user_name' =>$user->user_name]);
             session(['user_id'=>$user->id]);
             //move dashboard page
        return redirect()->route('home');
        } else {
        //  Email not found or password incorrect
        return redirect()->route('login.form')->with('failed','Invalid crendentials');
        }
      
    }







    //here we handle all backend related to home page
    function home(){
      //here we check user logged in or not 
        if(session('user_id')){
            //here we fetch all job from database
            $jobs=job::all();
          return view('home',compact('jobs'));
        }else{
          //here we check user not logged in
          return redirect()->route('login.form')->with('failed','Please login first');
        }

    } 


    //here we handle all backend related to contact page
    function contact(Request $request){
        //here  we apply validation of contact from page
        $request->validate([
             'user_name' => 'required|string|min:03|max:20',
             'user_email' => 'required|email',
             'user_message'=>'required|string|min:03|max:500',//set limit of msg here
             'user_subject' => 'required|string|min:03|max:50', //  Set limit of subject here
         ]);

         //here we store user data
           $ContactUs = new Contact();
          $ContactUs->user_name     = $request->user_name;
          $ContactUs->user_email    = $request->user_email;
          $ContactUs->user_subject  = $request->user_subject;
          $ContactUs->user_message  = $request->user_message;

         //here we save data in databse and move user froward to designation page with session message 
        if($ContactUs->save()){
              return redirect()->route('contact.form')->with('success', 'Thank you for contacting us. We have received your message and will get back to you soon.');
            }else{
              return redirect()->route('contact.form')->with('failed', 'Something went wrong! Please try again after some time');
        }

    }





    //here we handle all backend related to profile page
    function profile(){
      //check user logged in or not
     if(session('user_id')){
      $user=UserData::where('id',session('user_id'))->first();
      return view('profile',compact('user'));

     }else{
        return redirect()->route('login.form')->with('failed','Please login first');
     }
   }


   //here we just show data into editpage
   function editProfile(){
     //check user logged in or not
     if(session('user_id')){
      $user=UserData::where('id',session('user_id'))->first();
      return view('edit-profile',compact('user'));

     }else{
        return redirect()->route('login.form')->with('failed','Please login first');
     }

    }
   //here we handle all backend of user update pages
    function editProfileSubmit(Request $request){
      //check user logged in or not
     if(session('user_id')){
      $request->validate([
        'user_name'     => 'required|string|min:3|max:50',
        'user_age'      => 'required|digits:2|numeric',
        'user_mobile'   => 'required|digits:10|numeric',
        'user_city'     => 'required|string',
        'user_about'    => 'required|string|min:10|max:500'
      ]);
      // Fetch user
      $user = UserData::find(session('user_id'));

      // Update values
      $user->user_name   = $request->user_name;
      $user->user_age    = $request->user_age;
      $user->user_mobile = $request->user_mobile;
      $user->user_city   = $request->user_city;
      $user->user_about  = $request->user_about;

      // Save to database
      if($user->save()){
     return redirect()->route('profile')->with('success', 'Profile updated successfully!');

     }else{
     return redirect()->route('profile')->with('failed', 'Profile Not updated');

     }



     }else{
        return redirect()->route('login.form')->with('failed','Please login first');
     }

    

    }
    

    //logout functonality
    function logout(Request $request){
      // Remove all session data
     $request->session()->flush();
     // Redirect to login or home
     return redirect()->route('login.form')->with('success', 'You have been logged out.');
   }

    
    
     //here we hanle all backend related to show job details
     function viewjob($id){
      if(session('user_id')){
        session(['job_id'=>$id]);
        $job=Job::where('job_id',$id)->first(); 
        $user=UserData::where('id',session('user_id'))->first(); 
        return view('view-details', compact('job','user'));
      }else{
         return redirect()->route('login.form')->with('failed', 'Please log in first!');
      }

  
    
    }

    //here we handle all backend of appy job feature
    function applyJob(Request $request){
      //apply validation on resume field
      $request->validate([
        'user_resume' => 'required|mimes:pdf,doc,docx,jpg,jpeg,png|max:10240', // max 10MB

      ]);
      // Store uploaded resume
      $resumePath = $request->file('user_resume')->store('resumes', 'public');

      $application=new Application();
      $application->job_id=session('job_id');
      $application->user_id=session('user_id');
      $application->resume=$resumePath;

         //  Save and redirect
     if ($application->save()) {
        return redirect()->route('view.job', ['id' => session('job_id')])
                         ->with('success', 'We got your application! We’ll reach out soon.');
      } else {
        return redirect()->route('view.job', ['id' => session('job_id')])
                         ->with('failed', 'Something went wrong. Please try again.');
      }



    }
    
    //here we handle all backend ralated to my job 
    function myjob(){
      //first get all job id from application table where current user applied it
      $application = Application::where('user_id', session('user_id'))
               ->with('job') // eager load job details
               ->get();

      //now just show data in view
      Return view('myjob',compact('application'));




    }
}
