<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolios.index',compact(['portfolios']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio;

        $this->validate($request,[
          'name' => 'required|max:100',
          'url' => 'required|max:240',
        ],[
          'name.required' => ' Project name field is required.',
          'name.max' => ' Project name may not be greater than 100 characters.',
          'url.required' => ' URL field is required.',
          'url.max' => ' URL may not be greater than 240 characters.',
        ]);


        $portfolio->name = $request->input('name');
        $portfolio->project_type = $request->input('project_type');
        $portfolio->photo = $request->input('photo');

        $photo = $request->file('photo');
        $newPhoto = rand() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path("images"),$newPhoto);
        $portfolio->photo = $newPhoto;

        $portfolio->url = $request->input('url');

        Session::flash('success','Portfolio Successfully Added');
        
        $portfolio->save();

        return redirect()->back();
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact(['portfolio']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
         $this->validate($request,[
          'name' => 'required|max:100',
          'url' => 'required|max:240',
        ],[
          'name.required' => ' Project name field is required.',
          'name.max' => ' Project name may not be greater than 100 characters.',
          'url.required' => ' URL field is required.',
          'url.max' => ' URL may not be greater than 240 characters.',
        ]);
        
        $portfolio->name = $request->input('name');
        $portfolio->project_type = $request->input('project_type');

        if($request->hasfile('photo')){
        $photo = $request->file('photo');

        if($portfolio->photo){
            unlink(public_path("images/".$portfolio->photo));
        }

        $newPhoto = rand() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path("images"),$newPhoto);

        $portfolio->photo = $newPhoto;
        }

        $portfolio->url = $request->input('url');

        Session::flash('update','Portfolio Successfully Updated');
        
        $portfolio->save();

         return redirect('admin/portfolios');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        Session::flash('delete','Portfolio Successfully delete');

        return redirect()->back();
    }
}
