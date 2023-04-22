<!-- partial -->
@include('admin.script')
</body>
</html>


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
                <th scope="col">Instruction Name</th>
                <th scope="col">Designation</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($data as $i=> $team)
                <tbody>
                <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$team->h6}}</td>
                    <td>{{$team->h1}}</td>
                    <td>{{$team->instructor_name}}</td>
                    <td>{{$team->designation}}</td>
                    <td>
                        <img src="/teamimage/{{$team->image}}">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updateViewTeam',$team->id)}}">Update</a>
                        <a class="btn btn-danger" href="{{url('deleteTeam',$team->id)}}">Delete</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>

    </div>
</div>

<!-- partial -->
@include('admin.script')
</body>
</html>
