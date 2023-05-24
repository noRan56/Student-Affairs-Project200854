<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;
use Auth;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('Department.index')->with('departments',$departments);
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
        return view('Department.create');
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
        ]);
        $department = new Department;
        $department->name = $request->name;
        $department->code = $request->code;
        $department->save();
        return redirect('/departments')->with('success','Department Added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::findOrFail($id);
        
        return view('Department.show')->with('department',$department);
    }

    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department =Department::findOrFail($id);
        $department->delete();
        return redirect('/departments')->with('delete','Department deleted ');
    }
}
