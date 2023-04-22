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
                <th scope="col">pText</th>
                <th scope="col">hText</th>
                <th scope="col">description</th>
                <th scope="col">button1</th>
                <th scope="col">button2</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($data as $i=> $slide)
                <tbody>
                <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$slide->ptext}}</td>
                    <td>{{$slide->htext}}</td>
                    <td>{{$slide->description}}</td>
                    <td>{{$slide->button_1}}</td>
                    <td>{{$slide->button_2}}</td>
                    <td>
                        <img src="/productimage/{{$slide->image}}">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updateview',$slide->id)}}">Update</a>
                        <a class="btn btn-danger" href="{{url('deleteproduct',$slide->id)}}">Delete</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>

    </div>
</div>
