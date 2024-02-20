<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Link;
use App\Models\Partner;
use App\Models\Photo;
use App\Models\Service;
use App\Models\SocailMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //fetch all gallery data
    public function Gallery()
    {
        $allGallery = Photo::get();

        // Iterate through each gallery and update the image path
        foreach ($allGallery as $gallery) {
            $gallery->image = asset(Storage::url($gallery->image));
        }

        return response($allGallery);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //fetch about data

    public function About()
    {
        $All_About = About::get();
        // Iterate through each About and update the image path
        foreach ($All_About as $About) {
            $About->image = asset(Storage::url($About->image));
        }
        return response($All_About);

    }

    //fetch all services data
    public function Services()
    {
        $All_Service = Service::get();
        // Iterate through each Service and update the image path
        foreach ($All_Service as $Service) {
            $Service->image = asset(Storage::url($Service->image));
        }
        return response($All_Service);

    }


    // fetch all Partners data


    public function Partners()
    {
        $All_Partner = Partner::get();
        // Iterate through each Partner and update the image path
        foreach ($All_Partner as $Partner) {
            $Partner->image = asset(Storage::url($Partner->image));
        }
        return response($All_Partner);

    }
    // fetch contact data

    public function Contact()
    {
        $All_Contact = Contact::get();
        // Iterate through each Contact and update the image path

        return response($All_Contact);

    }

    public function AddContact(Request $request)
    {

        $All_Contact = Contact::create([
            'name' => $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'messages'=> $request->messages,
        ]);

        // Iterate through each Contact and update the image path
        return response($All_Contact);

    }

    // fetch All social media data

    public function SocailMedia()
    {
        $All_SocailMedia = SocailMedia::get();
        // Iterate through each SocailMedia and update the image path
        return response($All_SocailMedia);
    }

    public function contents()
    {
        $All_content = Content::get();

        return response($All_content);
    }
    public function iportLink()
    {
        $All_links = Link::get();

        return response($All_links);
    }

}
