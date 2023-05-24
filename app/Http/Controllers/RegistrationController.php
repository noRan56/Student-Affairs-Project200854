<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Registration;
use Auth;
class RegistrationController extends Controller
{
    //.
    
  ////*********************** */
  public function index()
  {
      return view('regists.index');
  }
  ///***************** */
  public function generate($id)
  {
    $regist = Registration::findOrFail($id);
  
   
  return view('regists.generate')->with('regist',$regist);
  }
  public function create()
  {
    if(!Auth::user()){
      return redirect('login');
  }
      return view('regists.create');
  }

  //****************** */
  public function store(Request $request)
  {
    if(!Auth::user()){
      return redirect('login');
  }
      $this->validate($request,[
          'name'=>'required',
          'code'=>'required',
          'department_name'=>'required',
          'course_name'=>'required',
          
          'teacher_name'=>'required',
          'need_id'=>'required',
        'need_degree'=>'required'
      ]);
      $regists = new Registration;
      $regists->name = $request->name;
      $regists->code = $request->code;
      $regists->department_name = $request->department_name;
      $regists->course_name = $request->course_name;
      $regists->teacher_name = $request->teacher_name;
      $regists->need_degree = $request->need_degree;
      $regists->need_id = $request->need_id;
      if ($request->need_id = 0) {
        # code...
        $regists->save();
        return redirect('/registration')->with('success','registration successed');
      }
       else {
        # code...
        if($request->need_degree  >= 50) {
            # code...
            $regists->save();
            return redirect('/registration')->with('success','registration successed');
          } else {
            # code...
            return redirect('/registration')->with('fail','you shoud success in Required study materials');
    
          }
      }
      
    
      
      
      
  }

   /************************* */

   public function show($id)
   {
       $regist = Registration::findOrFail($id);
       
       return view('regists.show')->with('regist',$regist);
   }
   public function destroy($id)
   {
       $regist =Registration::findOrFail($id);
       $regist->delete();
       return redirect('/registration')->with('delete','Department deleted ');
   }

}
