<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category(){
        return view('admin.category');
    }

    public function uploadCategory(Request $request){
        $data = new Category();
        $image1 = $request->file1;
        $imageName1 = time().'1.'.$image1->getClientOriginalExtension();
        $request->file1->move('categoriesimage',$imageName1);
        $data->image1 = $imageName1;

        $image2 = $request->file2;
        $imageName2 = time().'2.'.$image2->getClientOriginalExtension();
        $request->file2->move('categoriesimage',$imageName2);
        $data->image2 = $imageName2;

        $image3 = $request->file3;
        $imageName3 = time().'3.'.$image3->getClientOriginalExtension();
        $request->file3->move('categoriesimage',$imageName3);
        $data->image3 = $imageName3;

        $image4 = $request->file4;
        $imageName4 = time().'4.'.$image4->getClientOriginalExtension();
        $request->file4->move('categoriesimage',$imageName4);
        $data->image4 = $imageName4;

        $data->h6 = $request->h6;
        $data->h1 = $request->h1;
        $data->h5_1 = $request->h5_1;
        $data->h5_2 = $request->h5_2;
        $data->h5_3 = $request->h5_3;
        $data->h5_4 = $request->h5_4;
        $data->small = $request->small;

//        dd($request);

        $data->save();
        return redirect()->back()->with('message','product add successfully');

    }

    public function showCategory(){
        $data = Category::all();
        return view('admin.showCategory',compact('data'));
    }

    public function deleteCategory($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateViewCategory($id){
        $data = Category::find($id);
        return view('admin.updateCategory',compact('data'));
    }

    public function updateCategory(Request $request, $id){
        $data = Category::find($id);

        $image1 = $request->file1;
        if ($image1){
            $imageName1 = time().'1.'.$image1->getClientOriginalExtension();
            $request->file1->move('categoriesimage',$imageName1);
            $data->image1 = $imageName1;
        }

        $image2 = $request->file2;
        if ($image2){
            $imageName2 = time().'2.'.$image2->getClientOriginalExtension();
            $request->file2->move('categoriesimage',$imageName2);
            $data->image2 = $imageName2;
        }

        $image3 = $request->file3;
        if ($image3){
            $imageName3 = time().'3.'.$image3->getClientOriginalExtension();
            $request->file3->move('categoriesimage',$imageName3);
            $data->image3 = $imageName3;
        }

        $image4 = $request->file4;
        if ($image4){
            $imageName4 = time().'4.'.$image4->getClientOriginalExtension();
            $request->file4->move('categoriesimage',$imageName4);
            $data->image4 = $imageName4;
        }

        $data->h6 = $request->h6;
        $data->h1 = $request->h1;
        $data->h5_1 = $request->h5_1;
        $data->h5_2 = $request->h5_2;
        $data->h5_3 = $request->h5_3;
        $data->h5_4 = $request->h5_4;
        $data->small = $request->small;

//        dd($request);

        $data->save();
        return redirect('/showCategory')->with('message','product update successfully');

    }
}
