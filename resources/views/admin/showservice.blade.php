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
                <th scope="col">Icon</th>
                <th scope="col">pText</th>
                <th scope="col">hText</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($datas as $i=> $service)
                <tbody>
                <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$service->icon}}</td>
                    <td>{{$service->ptext}}</td>
                    <td>{{$service->htext}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updateViewS',$service->id)}}">Update</a>
                        <a class="btn btn-danger" href="{{url('deleteService',$service->id)}}">Delete</a>
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
