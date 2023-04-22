<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>

<!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial -->
@include('admin.navbar')

<div class="main-panel">
    <div class="container" align="center">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{session()->get('message')}}
            </div>
        @endif

        <h1>Show All Product</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">H6</th>
                <th scope="col">H1</th>
                <th scope="col">H5_1</th>
                <th scope="col">H5_2</th>
                <th scope="col">H5_3</th>
                <th scope="col">H5_4</th>
                <th scope="col">Small</th>
                <th scope="col">image1</th>
                <th scope="col">image2</th>
                <th scope="col">image3</th>
                <th scope="col">image4</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($data as $i=> $category)
                <tbody>
                <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$category->h6}}</td>
                    <td>{{$category->h1}}</td>
                    <td>{{$category->h5_1}}</td>
                    <td>{{$category->h5_2}}</td>
                    <td>{{$category->h5_3}}</td>
                    <td>{{$category->h5_4}}</td>
                    <td>{{$category->small}}</td>
                    <td>
                        <img src="/categoriesimage/{{$category->image1}}">
                    </td>
                    <td>
                        <img src="/categoriesimage/{{$category->image2}}">
                    </td>
                    <td>
                        <img src="/categoriesimage/{{$category->image3}}">
                    </td>
                    <td>
                        <img src="/categoriesimage/{{$category->image4}}">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updateViewCategory',$category->id)}}">Update</a>
                        <a class="btn btn-danger" href="{{url('deleteCategory',$category->id)}}">Delete</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>

    </div>
</div>
