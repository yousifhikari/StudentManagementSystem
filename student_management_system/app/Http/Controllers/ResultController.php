<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::all();
        return view('mycourses', ['results'=>$results, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $results = Result::all();
        return view('mycourses',['results' => $results, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = new Result();
        $result->s_id = $request->input('s_id');
        $result->c_code = $request->input('c_code');
        $result->quiz_1 = $request->input('quiz_1');
        $result->midterm = $request->input('midterm');
        $result->quiz_2 = $request->input('quiz_2');
        $result->final = $request->input('final');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Result::find($id);
        $results = Result::all();
        return view('mycourses', ['result'=>$result, 'results'=>$results, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Result::find($id);
        $results = Result::all();
        return view('mycourses', ['result'=>$result, 'results'=>$results, 'layout'=>'edit']);
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
        $result = Result::find($id);
        $result->s_id = $request->input('s_id');
        $result->c_code = $request->input('c_code');
        $result->quiz_1 = $request->input('quiz_1');
        $result->midterm = $request->input('midterm');
        $result->quiz_2 = $request->input('quiz_2');
        $result->final = $request->input('final');
        $result->save();
        return redirect('/mycourses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::find($id);
        $result->delete();
        return redirect('/mycourses');
    }
}
