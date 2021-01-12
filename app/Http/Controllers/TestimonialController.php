<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index',compact(['testimonials']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial;

         $this->validate($request,[
          'name' => 'required|max:100',
          
        ],[
          'name.required' => ' Project name field is required.',
          'name.max' => ' Project name may not be greater than 100 characters.',
        ]);

        $testimonial->name = $request->input('name');
        $testimonial->description = $request->input('description');
        $testimonial->status = $request->input('status');

        $profileImage = $request->file('image');
        $newProfileImageName = rand() . '.' . $profileImage->getClientOriginalExtension();
        $profileImage->move(public_path("images"),$newProfileImageName);
        $testimonial->image = $newProfileImageName;

        Session::flash('success','Portfolio Successfully Added');

        $testimonial->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact(['testimonial']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {

         $this->validate($request,[
          'name' => 'required|max:100',
          
        ],[
          'name.required' => ' Project name field is required.',
          'name.max' => ' Project name may not be greater than 100 characters.',
        ]);

        $testimonial->name = $request->input('name');
        $testimonial->description = $request->input('description');
        $testimonial->status = $request->input('status');

        if($request->hasfile('image')){
        $profileImage = $request->file('image');

        if($portfolio->photo){
            unlink(public_path("images/".$portfolio->photo));
        }

        $newProfileImageName = rand() . '.' . $profileImage->getClientOriginalExtension();
        $profileImage->move(public_path("images"),$newProfileImageName);
        $testimonial->image = $newProfileImageName;
        }

        Session::flash('update','Portfolio Successfully updated');

        $testimonial->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
       
        $testimonial->delete();

        Session::flash('delete','Testimonial Successfully delete');

        return redirect()->back();
    }
}
