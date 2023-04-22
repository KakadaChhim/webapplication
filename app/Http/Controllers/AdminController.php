<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Slide;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function product(){
        return view('admin.product');
    }

    public function uploadProduct(Request $request){
        $data = new Slide();
        $image = $request->file;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imageName);
        $data->image = $imageName;

        $data->ptext = $request->ptext;
        $data->htext = $request->htext;
        $data->description = $request->description;
        $data->button_1 = $request->button_1;
        $data->button_2 = $request->button_2;

//        dd($request);

        $data->save();
        return redirect()->back()->with('message','product add successfully');

    }

    public function showProduct(){
        $data = Slide::all();
        return view('admin.showproduct',compact('data'));
    }

    public function deleteProduct($id){
        $data = Slide::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id){
        $data = Slide::find($id);
        return view('admin.updateview',compact('data'));
    }

    public function updateProduct(Request $request, $id){
        $data = Slide::find($id);

        $image = $request->file;
        if ($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage',$imageName);
            $data->image = $imageName;
        }

        $data->ptext = $request->ptext;
        $data->htext = $request->htext;
        $data->description = $request->description;
        $data->button_1 = $request->button_1;
        $data->button_2 = $request->button_2;

//        dd($request);

        $data->save();
        return redirect('/showproduct')->with('message','product update successfully');

    }

}
