<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', compact(['skills']));
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
        $skill = new Skill;


        $this->validate($request,[
          'name' => 'required|unique:skills|max:100',
          'progress' => 'required',
        ],[
          'name.required' => ' Skill field is required.',
          'title.max' => ' Skill may not be greater than 100 characters.',
          'title.unique' => ' Skill already exist',
          'progress.required' => ' Progress field is required.',
        ]);

        $skill->name = $request->input('name');
        $skill->progress = $request->input('progress');

        Session::flash('success','Skill Successfully Added');

        $skill->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        $skills = Skill::all();
        return view('admin.skills.edit',compact(['skill','skills']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $this->validate($request,[
          'name' => 'required|unique:skills|max:100',
          'progress' => 'required',
        ],[
          'name.required' => ' Skill field is required.',
          'title.max' => ' Skill may not be greater than 100 characters.',
          'title.unique' => ' Skill already exist',
          'progress.required' => ' Progress field is required.',
        ]);

        $skill->name = $request->input('name');
        $skill->progress = $request->input('progress');

        Session::flash('update','Skill Successfully Updated');

        $skill->save();

        return redirect('admin/skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        Session::flash('delete','Skill Successfully delete');
        return redirect()->back();
    }
}
