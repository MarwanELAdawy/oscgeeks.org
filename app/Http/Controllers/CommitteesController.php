<?php

namespace App\Http\Controllers;

use App\Committee;
use Session;
use App\Image;
use Illuminate\Http\Request;

class CommitteesController extends Controller
{
    public function index1()
    {
        $committees_data = Committee::all();
        return view('linux', compact('committees_data'));
    }

    public function index2()
    {
        $committees_data = Committee::all();
        return view('about', compact('committees_data'));
    }

    public function index3()
    {
        $committees_data = Committee::all();
        $committee_images = Image::where(['comm_name' => 'Blender'])->get();
        return view('blender', compact('committees_data','committee_images'));
    }

    public function index4()
    {
        $committees_data = Committee::all();
        return view('laravel', compact('committees_data'));
    }

    public function index5()
    {
        $committees_data = Committee::all();
        $committees_data2 = Image::where(['comm_name' => 'Artwork'])->get();

        return view('art', compact('committees_data', 'committees_data2'));
    }
    public function index6()
    {
        $committees_data = Committee::all();
        return view('companies', compact('committees_data'));
    }

    public function index7()
    {
        $committees_data = Committee::all();
        $committee_images = Image::where(['comm_name' => 'Logistics'])->get();
        return view('logistics', compact('committees_data','committee_images'));
    }
    
    public function index8()
    {
       $committees_data = Committee::all();
        return view('ccc', compact('committees_data'));
    }
    public function index9()
    {
        if(Session::has('key')){
            return redirect('/done');
        }
        else{
       $committees_data = Committee::all();
        return view('form', compact('committees_data'));}
    }
    public function index10()
    {
       $committees_data = Committee::all();
        return view('BlenderWorkshop', compact('committees_data'));
    }
    public function index11()
    {
       $committees_data = Committee::all();
        return view('EnglishHeroes', compact('committees_data'));
    }
    public function index12()
    {
       $committees_data = Committee::all();
        return view('LinuxWorkshop', compact('committees_data'));
    }
    public function index13()
    {
       $committees_data = Committee::all();
        return view('HumanResource', compact('committees_data'));
    }
    public function index14()
    {
       $committees_data = Committee::all();
        return view('PublicRelations', compact('committees_data'));
    }
    public function index15()
    {
       $committees_data = Committee::all();
        return view('fundraising', compact('committees_data'));
    }
    public function index16()
    {
       $committees_data = Committee::all();
        return view('web', compact('committees_data'));
    }
    public function index17()
    {
       $committees_data = Committee::all();
        return view('Projects', compact('committees_data'));
    }
    public function done()
    {
        $committees_data = Committee::all();
        return view('done', compact('committees_data'));
    }
}