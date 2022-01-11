<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



     public function home($value='')
    {
        return view('frontend.service');
    }
      public function premium($value='')
    {
        return view('frontend.preminumservice');
    }
       public function ambulance($value='')
    {
        return view('frontend.ambulanceservice');
    }
    public function rehabilitation($value='')
    {
      return view('frontend.rehabilitationservice');
    }
    public function pharmacy($value='')
    {
      return view('frontend.pharmacy');
    }
    public function patientroom($value='')
    {
      return view('frontend.patientroom');
    }
    public function ccare($value='')
    {
      return view('frontend.ccare');
    }
    public function operation($value='')
    {
      return view('frontend.operation');
    }
    public function imaging($value='')
    {
      return view('frontend.imaging');
    }
    public function recovery($value='')
    {
      return view('frontend.recovery');
    }
     public function highdepency($value='')
    {
      return view('frontend.highdepency');
    } 
    public function endoscopy($value='')
    {
      return view('frontend.endoscopy');
    } public function dogbite($value='')
    {
      return view('frontend.dogbite');
    }

    public function mail()
    {
       $name = 'Thiri Khin';
       Mail::to('kooo80566@gmail.com')->send(new SendMailable($name));
       
       return 'Email was sent';
    }

}
