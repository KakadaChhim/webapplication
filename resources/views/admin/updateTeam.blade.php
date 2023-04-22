<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.css')
</head>
<body>

<!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial -->
@include('admin.navbar')


<div class="main-panel">
    <div class="container" align="center">
        <h1>Add Product</h1>
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{session()->get('message')}}
            @endif

            <form action="{{url('updateTeam',$data->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Product Name</label>
                    <input type="text" class="form-control" value="{{$data->h6}}" name="ptext" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter a product name.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Price</label>
                    <input type="text" class="form-control" value="{{$data->h1}}" name="htext" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter a price.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Instructor Name</label>
                    <input type="text" class="form-control" value="{{$data->instructor_name}}" name="description" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter a description in the textarea.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Designation</label>
                    <input type="text" class="form-control" value="{{$data->designation}}" name="button_1" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter a quantity.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Old image</label>
                    <img src="/teamimage/{{$data->image}}">
                </div>


                <div class="mb-3">
                    <label>Change the image</label>
                    <input type="file" class="form-control" name="file" aria-label="file example" >
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                    <button class="btn btn-danger">Back</button>
                </div>
            </form>
        </div>
</div>

<!-- partial -->
@include('admin.script')
</body>
</html>
