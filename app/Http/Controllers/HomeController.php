<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;
use App\Models\BannerHome;
use App\Models\Artikel;
use App\Models\BannerPromo;
use App\Models\Contact;
use App\Models\Fitur;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimoni;
use App\Models\User;

class HomeController extends Controller
{
    
    public function index()
    {
        $bannerHome = BannerHome::first();
        $about = About::first();
        $fitur = Fitur::all();
        $bannerPromo = BannerPromo::first();
        $testimoni = Testimoni::all();
        $artikel = Artikel::all();
        $partner = Partner::all();
        $contact = Contact::first();

        return view('home.index', compact('bannerHome', 'about', 'fitur', 'bannerPromo', 'testimoni', 'artikel', 'partner', 'contact' ), [
            "title" => "Home"
        ]);
    }

    public function about()
    {
        $about = About::first();
        $team = Team::first();
        $testimoni = Testimoni::all();

        return view('home.about', compact( 'about', 'team', 'testimoni' ), [
            "title" => "About"
        ]);
    }

    public function service()
    {
        $service = Service::all();

        return view('home.service', compact( 'service'), [
            "title" => "Service"
        ]);
    }

    public function lokasi()
    {
        $contact = Contact::first();

        return view('home.lokasi', compact( 'contact'), [
            "title" => "Lokasi"
        ]);
    }

    public function informasi()
    {
        $artikel = Artikel::all();

        return view('home.informasi', compact( 'artikel'), [
            "title" => "Informasi"
        ]);
    }
    
    
    
    
}
