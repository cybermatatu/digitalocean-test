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
        
    }

    public function digitalocean() {

        //echo '<pre>';
        //print_r(DigitalOcean::size()->getAll());

        /******* Return the Account API *********/
        //print_r(DigitalOcean::account());
        //print_r(DigitalOcean::account()->getUserInformation());
        /************ Get Account Information **************/
        //echo 'Email: '.DigitalOcean::account()->getUserInformation()->email."\n";
        //echo 'Droplet Limit: '.DigitalOcean::account()->getUserInformation()->dropletLimit."\n";
        //echo 'UUID: '.DigitalOcean::account()->getUserInformation()->uuid."\n";
        //echo 'Email Verified: '.DigitalOcean::account()->getUserInformation()->emailVerified."\n";

        /******** Return the Action API ********/
        //print_r(DigitalOcean::action()->getAll());
        /************** Actions **************/
        //print_r(DigitalOcean::action()->getById(56119513));

        /*********** Return the domain API ***********/
        //print_r(DigitalOcean::domain());

        // return a collection of Domain entity
        //print_r(DigitalOcean::domain()->getAll());

        // return the Domain entity
        //print_r(DigitalOcean::domain()->getByName('jnatest.tk'));

        // return the created Domain named 'bar.dk' and pointed to ip '127.0.0.1'
        //print_r(DigitalOcean::domain()->create('bar.dk', '127.0.0.1'));

        // delete the domain named 'baz.dk'
        //print_r(DigitalOcean::domain()->delete('bar.dk'));

        /********** Return the domain record api **********/
        //print_r(DigitalOcean::domainRecord());

        // return a collection of DomainRecord entity of the domain 'foo.dk'
        //print_r(DigitalOcean::domainRecord()->getAll('jnatest.tk'));

        // return the DomainRecord entity 123 of the domain 'foo.dk'
        //print_r(DigitalOcean::domainRecord()->getById('jnatest.tk', 6303794));

        // return the created DomainRecord entity of the domain 'bar.dk'
        //print_r(DigitalOcean::domainRecord()->create('bar.dk', 'AAAA', 'bar-name', '2001:db8::ff00:42:8329'));

        // return the updated DomainRecord entity 123 of the domain 'baz.dk'
        //print_r(DigitalOcean::domainRecord()->update('baz.dk', 123, 'new-name'));

        // delete domain record 123 of the domain 'qmx.dk'
        //print_r(DigitalOcean::domainRecord()->delete('qmx.dk', 123));

        /********** Droplet API **********/
        // return the droplet api
        //print_r(DigitalOcean::droplet());

        // return a collection of Droplet entity
        //print_r(DigitalOcean::droplet()->getAll());

        // return a collection of Droplet neighbor to Droplet entity 123
        //print_r(DigitalOcean::droplet()->getNeighborsById(1484845));

        // return a collection of Droplet that are running on the same physical hardware
        //print_r(DigitalOcean::droplet()->getAllNeighbors());

        // return a collection of Upgrade entity
        //print_r(DigitalOcean::droplet()->getUpgrades());

        // return the Droplet entity 123
        //print_r(DigitalOcean::droplet()->getById(1484845));

        return response()->json([DigitalOcean::droplet()->getById(1484845)]);

        // create and return the created Droplet entity
        //print_r(DigitalOcean::droplet()->create('kamau-2014', 'nyc1', '512mb', 78449676388));

        // create and return the created Droplet entity using an image slug
        //print_r(DigitalOcean::droplet()->create('kamau2014', 'sfo1', '512mb', 'ubuntu-14-04-x64'));

        // delete the droplet 123
        //print_r(DigitalOcean::droplet()->delete(6123868));

        // return a collection of Kernel entity
        //print_r(DigitalOcean::droplet()->getAvailableKernels(6123868));

        // power on droplet 123 and return the Action entity
        //print_r(DigitalOcean::droplet()->powerOn(6123868));

        // power off droplet 123 and return the Action entity
        //print_r(DigitalOcean::droplet()->powerOff(6123868));

    }
}
