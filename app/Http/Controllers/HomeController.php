<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        // ABOUT
        $About= About::all();

        // SKILL
        $Skills= Skill::all();
        
        // PORTFOLIO
        $Portfolios= Portfolio::all();

        // CONTACT
        $Contacts= Contact::all();

        // FACT
        $Facts= Fact::all();

        // SERVICE
        $Services= Service::all();

        return view('home', compact('About','Skills', 'Portfolios','Contacts','Services','Facts'));
    }

    public function admin(){
        return view('backoffice.admin');
    }


}
