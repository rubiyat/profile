<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experiences.index',compact(['experiences']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $experience = New Experience;

         $this->validate($request,[
          'company_name' => 'required|max:100',
          'position' => 'required|max:100',
          'star_date' => 'required|max:100',
          'end_date' => 'required|max:100',
        ],[
          'company_name.required' => ' Company name field is required.',
          'company_name.max' => ' Company name may not be greater than 100 characters.',
          'position.required' => ' Position name field is required.',
          'position.max' => ' Position name may not be greater than 100 characters.',
          'star_date.required' => ' Star date field is required.',
          'star_date.max' => ' Star date name may not be greater than 100 characters.',
          'end_date.required' => ' End date field is required.',
          'end_date.max' => ' End date may not be greater than 100 characters.',
        ]);


        $experience->company_name = $request->input('company_name');
        $experience->position = $request->input('position');
        $experience->star_date = $request->input('star_date');
        $experience->end_date = $request->input('end_date');
        $experience->description = strip_tags($request->input('description'));

        Session::flash('success','Experience Successfully Added');

        $experience->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(experience $experience)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(experience $experience)
    {
        return view('admin.experiences.edit', compact(['experience']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, experience $experience)
    {
         $this->validate($request,[
          'company_name' => 'required|max:100',
          'position' => 'required|max:100',
          'star_date' => 'required|max:100',
          'end_date' => 'required|max:100',
        ],[
          'company_name.required' => ' Company name field is required.',
          'company_name.max' => ' Company name may not be greater than 100 characters.',
          'position.required' => ' Position name field is required.',
          'position.max' => ' Position name may not be greater than 100 characters.',
          'star_date.required' => ' Star date field is required.',
          'star_date.max' => ' Star date name may not be greater than 100 characters.',
          'end_date.required' => ' End date field is required.',
          'end_date.max' => ' End date may not be greater than 100 characters.',
        ]);

        $experience->company_name = $request->input('company_name');
        $experience->position = $request->input('position');
        $experience->star_date = $request->input('star_date');
        $experience->end_date = $request->input('end_date');
        $experience->description = $request->input('description');

        Session::flash('update','Experience Successfully Updated');

        $experience->save();

        return redirect('admin/experiences');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(experience $experience)
    {
        $experience->delete();

        Session::flash('delete','Experience Successfully delete');

        return redirect()->back();
    }
}
