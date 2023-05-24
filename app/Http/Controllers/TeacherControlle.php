<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Auth;
class TeacherControlle extends Controller
{
    //
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index')->with('teachers',$teachers);
    }
    public function create()
    {
        if(!Auth::user()){
            return redirect('login');
        }
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        if(!Auth::user()){
            return redirect('login');
        }
       //
       $this->validate($request,[
        'name'=>'required',
        'code'=>'required',
        'email'=>'required',
        'password'=>'required',
        'course_id'=>'required'
    ]);
    $teachers = new Teacher;
    $teachers->name = $request->name;
    $teachers->code = $request->code;
    $teachers->email = $request->email;
    $teachers->password= $request->password;
    $teachers->course_id = $request->course_id;
    $teachers->save();
    return redirect('/teacher')->with('success','teacher Added');
        
    }
     /**
     * Display the specified resource.
     *
      * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        
        return view('teachers.show')->with('teacher',$teacher );
    }
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit')->with('teacher',$teacher );
    }
   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=Teacher::findOrFail($id);
        $teacher->delete();
        return redirect('/teacher')->with('delete','teacher deleted ');
    }
    

}
