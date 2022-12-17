<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $courses=DB::table('courses')->where('fname','LIKE','%'.$request->search."%")
            ->get();

            if($courses)
            {
                foreach ($courses as $course) {
                $output.='<tr>'.
                '<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" <div class="flex items-center"> <div class="ml-3"> <a href="/show/'.$course->id.'"><p class="text-gray-900 whitespace-no-wrap">'.$course->c_name.'</div></div></p></a></td>'.
                '<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm>"<p class="text-gray-900 whitespace-no-wrap">'.$course->grade.'</p></td>'.
                '</tr>';
                }
                return Response($output);
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
