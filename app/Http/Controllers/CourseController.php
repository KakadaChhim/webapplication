<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Team;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $dataSlide = Slide::all();
        $services = Service::all();
        $abouts = About::all();
        $categories = Category::all();
        $courses = Course::all();
        $teams = Team::all();
        return view('user.courses',compact('dataSlide',
            'services', 'abouts', 'categories', 'courses', 'teams'));
    }
    public function course(){
        return view('admin.course');
    }

    public function uploadCourse(Request $request){
        $data = new Course();
        $image = $request->file;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('courseimage',$imageName);
        $data->image = $imageName;

        $data->h6 = $request->h6;
        $data->h1 = $request->h1;
        $data->button1 = $request->button1;
        $data->button2 = $request->button2;
        $data->price = $request->price;
        $data->icon = $request->icon;
        $data->h5 = $request->h5;
        $data->teacher_name = $request->teacher_name;
        $data->time = $request->time;
        $data->student = $request->student;


//        dd($request);

        $data->save();
        return redirect()->back()->with('message','product add successfully');

    }

    public function showCourse(){
        $data = Course::all();
        return view('admin.showCourse',compact('data'));
    }

    public function deleteCourse($id){
        $data = Course::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateViewCourse($id){
        $data = Course::find($id);
        return view('admin.updateCourse',compact('data'));
    }

    public function updateCourse(Request $request, $id){
        $data = Course::find($id);

        $image = $request->file;
        if ($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('courseimage',$imageName);
            $data->image = $imageName;
        }

        $data->h6 = $request->h6;
        $data->h1 = $request->h1;
        $data->button1 = $request->button1;
        $data->button2 = $request->button2;
        $data->price = $request->price;
        $data->icon = $request->icon;
        $data->h5 = $request->h5;
        $data->teacher_name = $request->teacher_name;
        $data->time = $request->time;
        $data->student = $request->student;
//        dd($request);

        $data->save();
        return redirect('/showCourse')->with('message','product update successfully');

    }
}
