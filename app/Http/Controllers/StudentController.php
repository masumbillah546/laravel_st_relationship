<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    // $students   = Student::all()
        //print_r(Student::all());
        return view("student.index", ['students'=>Student::all()]);
    }

    /**
     * Show the form for creating a new resource.
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
         $student = new Student;
         $this->validate($request,[
        'name' => 'required|min:5',
        'batch' => 'required',
        'phone' => 'required',
        //'email' => 'required',
        
        ]);

         $student->name = $request->name;
         $student->batch_id = $request->batch;
         $student->phone = $request->phone;
         $student->address = $request->address;
         $student->district_id = $request->district_id;
         $student->photo = $request->photo->store('image','public');

         //return $student;
         $student->save();
         // return redirect()->route('student.index');
         // return view('student.index', ['students'=>Student::all()]);
         return $this->index();



         // if ($request->fails()) {
            //return redirect('student/create')->withErrors($validatedData)->withInput();
            //return redirect()->back()->withErrors($validatedData)->withInput();
           // return back()->withErrors($validatedData)->withInput();
       // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit( $student)
    {
        $data = Student::find($student);
        return view('student.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
