<?php

namespace App\Http\Controllers\site;

use App\Models\team;
use App\Models\Work;
use App\Models\featur;
use App\Models\slider;
use App\Models\services;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class SiteController extends Controller
{
    public function index(){
    
        $services = services::where('status' , '=' , true)->get();
        $teams = team::where('status' , '=' , 1)->get();
        $featurs = featur::where('status' , '=' , 1)->get();
        $sliders = slider::where('status' , '=' , 1)->find(1);
        
        
    
            
        return view('site.master' , compact('services','teams','featurs','sliders'));
         
        
        }
        public function contact_data(Request $request)
        {

            Mail::to('mm1358145@gmail.com')->send(new ContactMail($request->except('_token')));                                                                          
            return redirect()->route('home');

            // return view('site.master');

        }
}
