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

            <form action="{{url('updateCourse',$data->id)}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">H6</label>
                    <input type="text" class="form-control" value="{{$data->h6}}" name="h6" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter an icon in the textarea.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">H1</label>
                    <input type="text" class="form-control" value="{{$data->h1}}" name="h1" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter some text.
                    </div>
                </div>


                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Price</label>
                    <input type="text" class="form-control" value="{{$data->price}}" name="price" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter some text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Icon</label>
                    <input type="text" class="form-control" value="{{$data->icon}}" name="icon" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter some text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">H5</label>
                    <input type="text" class="form-control" value="{{$data->h5}}" name="h5" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter some text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Teacher Name</label>
                    <input type="text" class="form-control" value="{{$data->teacher_name}}" name="teacher_name" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter some text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Time</label>
                    <input type="text" class="form-control" value="{{$data->time}}" name="time" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter some text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Student</label>
                    <input type="text" class="form-control" value="{{$data->student}}" name="student" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter some text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Button1</label>
                    <input type="text" class="form-control" value="{{$data->button1}}" name="button1" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Button2</label>
                    <input type="text" class="form-control" value="{{$data->button2}}" name="button2" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>



                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Old image</label>
                    <img src="/courseimage/{{$data->image}}">
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
