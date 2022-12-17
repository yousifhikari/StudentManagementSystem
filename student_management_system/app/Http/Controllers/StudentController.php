<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        $students = Student::all();
        return view('students', ['students'=>$students, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('students',['students' => $students, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->fname = $request->input('fname');
        $student->mname = $request->input('mname');
        $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
        $student->dateOfBirth = $request->input('dateOfBirth');
        $student->gender = $request->input('gender');
        $student->address = $request->input('address');
        $student->mobile = $request->input('mobile');
        $student->blood = $request->input('blood');
        $student->grade = $request->input('grade');
        $student->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('students', ['student'=>$student, 'students'=>$students, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('students', ['student'=>$student, 'students'=>$students, 'layout'=>'edit']);
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
        $student = Student::find($id);
        $student->fname = $request->input('fname');
        $student->mname = $request->input('mname');
        $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
        $student->dateOfBirth = $request->input('dateOfBirth');
        $student->gender = $request->input('gender');
        $student->address = $request->input('address');
        $student->mobile = $request->input('mobile');
        $student->blood = $request->input('blood');
        $student->grade = $request->input('grade');
        $student->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }
}
