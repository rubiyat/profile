<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\About;
use App\Skill;
use App\Education;
use App\Experience;
use App\Portfolio;
use App\Testimonial;
use App\Contact;

class FrontController extends Controller
{
    public function getComplateResume() {
    	$users = User::all();
    	$about = About::first();
        $skills = Skill::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $portfolios = Portfolio::all();
        $testimonials = Testimonial::all();
        return view('welcome',compact(['users','about','skills','educations','experiences','portfolios','testimonials']));
    }

    public function saveContact(Request $request){

        $contact = new Contact;

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->back();
    }
}
