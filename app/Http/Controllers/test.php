<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use GrahamCampbell\DigitalOcean\Facades\DigitalOcean;

class test extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

        // you can alias this in config/app.php if you like

        //DigitalOcean::droplet()->powerOn(12345);
        // we're done here - how easy was that, it just works!

        DigitalOcean::size()->getAll();
        // this example is simple, and there are far more methods available
    }
}
