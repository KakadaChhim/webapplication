<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Service;
use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $dataSlide = Slide::all();
        $services = Service::all();
        $abouts = About::all();
        $categories = Category::all();
        $courses = Course::all();
        $teams = Team::all();
        return view('user.home',compact('dataSlide',
            'services', 'abouts', 'categories', 'courses', 'teams'));
    }
}
