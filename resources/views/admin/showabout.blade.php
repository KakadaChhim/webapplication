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
                <th scope="col">P1</th>
                <th scope="col">P2</th>
                <th scope="col">list1</th>
                <th scope="col">list2</th>
                <th scope="col">list3</th>
                <th scope="col">list4</th>
                <th scope="col">list5</th>
                <th scope="col">list6</th>
                <th scope="col">button</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($data as $i=> $about)
                <tbody>
                <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$about->h_6}}</td>
                    <td>{{$about->h_1}}</td>
                    <td>{{$about->p_1}}</td>
                    <td>{{$about->p_2}}</td>
                    <td>{{$about->list_1}}</td>
                    <td>{{$about->list_2}}</td>
                    <td>{{$about->list_3}}</td>
                    <td>{{$about->list_4}}</td>
                    <td>{{$about->list_5}}</td>
                    <td>{{$about->list_6}}</td>
                    <td>{{$about->button}}</td>
                    <td>
                        <img src="/productimage/{{$about->image}}">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updateViewAbout',$about->id)}}">Update</a>
                        <a class="btn btn-danger" href="{{url('deleteAbout',$about->id)}}">Delete</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>

    </div>
</div>
