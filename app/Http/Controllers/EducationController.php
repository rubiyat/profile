<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::all();
        return view('admin.educations.index',compact(['educations']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $education = new Education;

        $this->validate($request,[
          'inistitute_name' => 'required|max:150',
          'board_name' => 'required|max:100',
          'certificate' => 'required|max:100',
          'result' => 'required|max:100',
          'session' => 'required|max:100',
        ],[
          'inistitute_name.required' => ' Inistitute name field is required.',
          'inistitute_name.max' => ' Inistitute name may not be greater than 150 characters.',
          'board_name.required' => ' Board name field is required.',
          'board_name.max' => ' Board name may not be greater than 100 characters.',
          'certificate.required' => ' Certificate name field is required.',
          'certificate.max' => ' Certificate name may not be greater than 100 characters.',
          'result.required' => ' Result field is required.',
          'result.max' => ' Result may not be greater than 100 characters.',
          'session.required' => ' Session name field is required.',
          'session.max' => ' Session name may not be greater than 150 characters.',
        ]);

        $education->inistitute_name = $request->input('inistitute_name');
        $education->board_name = $request->input('board_name');
        $education->certificate = $request->input('certificate');
        $education->result = $request->input('result');
        $education->session = $request->input('session');

        Session::flash('success','Education Successfully Added');

        
        $education->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('admin.educations.edit',compact(['education']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $this->validate($request,[
          'inistitute_name' => 'required|max:150',
          'board_name' => 'required|max:100',
          'certificate' => 'required|max:100',
          'result' => 'required|max:100',
          'session' => 'required|max:100',
        ],[
          'inistitute_name.required' => ' Inistitute name field is required.',
          'inistitute_name.max' => ' Inistitute name may not be greater than 150 characters.',
          'board_name.required' => ' Board name field is required.',
          'board_name.max' => ' Board name may not be greater than 100 characters.',
          'certificate.required' => ' Certificate name field is required.',
          'certificate.max' => ' Certificate name may not be greater than 100 characters.',
          'result.required' => ' Result field is required.',
          'result.max' => ' Result may not be greater than 100 characters.',
          'session.required' => ' Session name field is required.',
          'session.max' => ' Session name may not be greater than 150 characters.',
        ]);

        $education->inistitute_name = $request->input('inistitute_name');
        $education->board_name = $request->input('board_name');
        $education->certificate = $request->input('certificate');
        $education->result = $request->input('result');
        $education->session = $request->input('session');

        Session::flash('update','Education Successfully Updated');
        
        $education->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        Session::flash('delete','Education Successfully delete');
        return redirect()->back();
    }
}
