<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Team;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $dataSlide = Slide::all();
        $services = Service::all();
        $abouts = About::all();
        $categories = Category::all();
        $courses = Course::all();
        $teams = Team::all();
        return view('user.about',compact('dataSlide',
            'services', 'abouts', 'categories', 'courses', 'teams'));
    }

    public function about(){
        return view('admin.about');
    }

    public function uploadAbout(Request $request){
        $data = new About();
        $image = $request->file;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imageName);
        $data->image = $imageName;

        $data->h_6 = $request->h_6;
        $data->h_1 = $request->h_1;
        $data->p_1 = $request->p_1;
        $data->p_2 = $request->p_2;
        $data->list_1 = $request->list_1;
        $data->list_2 = $request->list_2;
        $data->list_3 = $request->list_3;
        $data->list_4 = $request->list_4;
        $data->list_5 = $request->list_5;
        $data->list_6 = $request->list_6;
        $data->button = $request->button;

//        dd($request);

        $data->save();
        return redirect()->back()->with('message','product add successfully');

    }

    public function showAbout(){
        $data = About::all();
        return view('admin.showabout',compact('data'));
    }

    public function deleteAbout($id){
        $data = About::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateViewAbout($id){
        $data = About::find($id);
        return view('admin.updateabout',compact('data'));
    }

    public function updateAbout(Request $request, $id){
        $data = About::find($id);

        $image = $request->file;
        if ($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage',$imageName);
            $data->image = $imageName;
        }

        $data->h_6 = $request->h_6;
        $data->h_1 = $request->h_1;
        $data->p_1 = $request->p_1;
        $data->p_2 = $request->p_2;
        $data->list_1 = $request->list_1;
        $data->list_2 = $request->list_2;
        $data->list_3 = $request->list_3;
        $data->list_4 = $request->list_4;
        $data->list_5 = $request->list_5;
        $data->list_6 = $request->list_6;
        $data->button = $request->button;

//        dd($request);

        $data->save();
        return redirect('/showAbout')->with('message','product update successfully');

    }
}
