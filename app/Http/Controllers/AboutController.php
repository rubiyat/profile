<?php

namespace App\Http\Controllers;

use App\About;
use App\Skill;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        return view('admin.abouts.index', compact(['about']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About;

        $about->designation = $request->input('designation');
        $about->about_me = strip_tags($request->input('about_me'));

        $profileImage = $request->file('profile_image');
        $newProfileImageName = rand() . '.' . $profileImage->getClientOriginalExtension();
        $profileImage->move(public_path("images"),$newProfileImageName);
        $about->profile_image = $newProfileImageName;

        $cv = $request->file('cv');
        $newCVName = rand() . '.' . $cv->getClientOriginalExtension();
        $cv->move(public_path("images"),$newCVName);
        $about->cv = $newCVName;

        $about->address = $request->input('address');
        $about->phone = $request->input('phone');
        $about->email = $request->input('email');
        $about->fb = $request->input('fb');
        $about->tw = $request->input('tw');
        $about->li = $request->input('li');
        $about->google = $request->input('google');
        $about->git = $request->input('git');
        $about->bitbucket = $request->input('bitbucket');
       
        $about->save();

       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.abouts.edit', compact(['about']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $about->designation = $request->input('designation');
        $about->about_me = strip_tags($request->input('about_me'));

        if($request->hasFile('profile_image')){
            $profileImage = $request->file('profile_image');
            if($about->profile_image){
                unlink(public_path('images/'.$about->profile_image));
            }
            $newProfileImageName = rand() . '.' . $profileImage->getClientOriginalExtension();
            $profileImage->move(public_path("images"),$newProfileImageName);
            $about->profile_image = $newProfileImageName;
        }
        if($request->hasFile('cv')){
            $cv = $request->file('cv');
            if($about->cv){
                unlink(public_path('images/'.$about->cv));
            }
            $newCVName = rand() . '.' . $cv->getClientOriginalExtension();
            $cv->move(public_path("images"),$newCVName);
            $about->cv = $newCVName;
        }
        $about->address = $request->input('address');
        $about->phone = $request->input('phone');
        $about->email = $request->input('email');
        $about->fb = $request->input('fb');
        $about->tw = $request->input('tw');
        $about->li = $request->input('li');
        $about->google = $request->input('google');
        $about->git = $request->input('git');
        $about->bitbucket = $request->input('bitbucket');
       
        $about->save();

       return redirect('admin/abouts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
