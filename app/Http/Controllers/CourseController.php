<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('Course.index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::user()){
            return redirect('login');
        }
        return view('Course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::user()){
            return redirect('login');
        }
        $this->validate($request,[
            'name'=>'required',
            'code'=>'required',
            'department_id'=>'required',
            'need_id'=>'required'
        ]);
        $courses = new Course;
        $courses->name = $request->name;
        $courses->code = $request->code;
        $courses->department_id = $request->department_id;
        $courses->need_id = $request->need_id;
        $courses->save();
        return redirect('/courses')->with('success','Course Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        
        return view('Course.show')->with('course',$course);
    }
    


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course =Course::findOrFail($id);
        $course->delete();
        return redirect('/courses')->with('delete','Department deleted ');
    }
}
