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
                <th scope="col">Price</th>
                <th scope="col">Icon</th>
                <th scope="col">H5</th>
                <th scope="col">TeacherName</th>
                <th scope="col">Time</th>
                <th scope="col">Student</th>
                <th scope="col">button1</th>
                <th scope="col">button2</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($data as $i=> $course)
                <tbody>
                <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$course->h6}}</td>
                    <td>{{$course->h1}}</td>
                    <td>{{$course->price}}</td>
                    <td>{{$course->icon}}</td>
                    <td>{{$course->h5}}</td>
                    <td>{{$course->teacher_name}}</td>
                    <td>{{$course->time}}</td>
                    <td>{{$course->student}}</td>
                    <td>{{$course->button1}}</td>
                    <td>{{$course->button2}}</td>
                    <td>
                        <img src="/courseimage/{{$course->image}}">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updateViewCourse',$course->id)}}">Update</a>
                        <a class="btn btn-danger" href="{{url('deleteCourse',$course->id)}}">Delete</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>

    </div>
</div>
