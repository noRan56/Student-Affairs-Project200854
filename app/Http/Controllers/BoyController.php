<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boy;
use Auth;
class BoyController extends Controller
{
    //
    public function index()
    {
        $boys = Boy::all();
        return view('boys.index')->with('boys',$boys);
    }
    public function create()
    {
        if(!Auth::user()){
            return redirect('login');
        }
        return view('boys.create');
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
        'password'=>'required'
    ]);
    $boys = new Boy;
    $boys->name = $request->name;
    $boys->code = $request->code;
    $boys->email = $request->email;
    $boys->password= $request->password;
  
    $boys->save();
    return redirect('/student')->with('success','student Added');
        
    }
     /**
     * Display the specified resource.
     *
      * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $boy = Boy::findOrFail($id);
        
        return view('boys.show')->with('boy',$boy );
    }
   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boy=Boy::findOrFail($id);
        $boy->delete();
        return redirect('/student')->with('delete','student deleted ');
    }
    

}
