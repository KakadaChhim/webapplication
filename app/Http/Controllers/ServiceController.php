<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        return view('admin.service');
    }

    public function uploadService(Request $request){
        $datas = new Service();
        $datas->icon = $request->icon;
        $datas->ptext = $request->ptext;
        $datas->htext = $request->htext;

//        dd($request);

        $datas->save();
        return redirect()->back()->with('message','product add successfully');

    }

    public function showService(){
        $datas = Service::all();
        return view('admin.showservice',compact('datas'));
    }

    public function deleteService($id){
        $datas = Service::find($id);
        $datas->delete();
        return redirect()->back();
    }

    public function updateViewS($id){
        $datas = Service::find($id);
        return view('admin.updateservice',compact('datas'));
    }

    public function updateService(Request $request, $id){
        $datas = Service::find($id);
        $datas->icon = $request->icon;
        $datas->ptext = $request->ptext;
        $datas->htext = $request->htext;

//        dd($request);

        $datas->save();
        return redirect('/showService')->with('message','product update successfully');

    }
}
