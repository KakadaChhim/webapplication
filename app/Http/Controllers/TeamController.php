<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team(){
        return view('admin.team');
    }

    public function uploadTeam(Request $request){
        $data = new Team();
        $image = $request->file;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('teamimage',$imageName);
        $data->image = $imageName;

        $data->h6 = $request->h6;
        $data->h1 = $request->h1;
        $data->instructor_name = $request->instructor_name;
        $data->designation = $request->designation;

//        dd($request);

        $data->save();
        return redirect()->back()->with('message','product add successfully');

    }

    public function showTeam(){
        $data = Team::all();
        return view('admin.showTeam',compact('data'));
    }

    public function deleteTeam($id){
        $data = Team::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateViewTeam($id){
        $data = Team::find($id);
        return view('admin.updateTeam',compact('data'));
    }

    public function updateTeam(Request $request, $id){
        $data = Team::find($id);

        $image = $request->file;
        if ($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('teamimage',$imageName);
            $data->image = $imageName;
        }

        $data->h6 = $request->h6;
        $data->h1 = $request->h1;
        $data->instructor_name = $request->instructor_name;
        $data->designation = $request->designation;

//        dd($request);

        $data->save();
        return redirect('/showTeam')->with('message','product update successfully');

    }

}
