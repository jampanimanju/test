<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\std;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students=std::all()->toArray();
      return view('student.index',compact('students'));  
    }

    /**
     * Show the form for creating a new resource.k
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

           'first_name'=>'required',
           'second_name'=>'required' 
        ]);
        $std=new std([
            'first_name'=> $request->get('first_name'),
            'second_name'=>$request->get('second_name')
        ]);
        $std->save();
        return redirect()->route('student.index')->with('success','data added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=std::find($id);
        return view('student.edit',compact('student','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[

           'first_name'=>'required',
           'second_name'=>'required' 
        ]);
         $student=std::find($id);
         $student->first_name=$request->get('first_name');
         $student->second_name=$request->get('second_name');
         $student->save();
         return redirect()->route('student.index')->with('success','dataupdated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=std::find($id);
        $student->delete();
        return redirect()->route('student.index')->with('success','data deleted');
    }
}
