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

            <form action="{{url('updateCategory',$data->id)}}" enctype="multipart/form-data" method="post">
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
                    <label for="validationTextarea" class="form-label">H5_1</label>
                    <input type="text" class="form-control" value="{{$data->h5_1}}" name="h5_1" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">H5_2</label>
                    <input type="text" class="form-control" value="{{$data->h5_2}}" name="h5_2" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">H5_3</label>
                    <input type="text" class="form-control" value="{{$data->h5_3}}" name="h5_3" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">H5_4</label>
                    <input type="text" class="form-control" value="{{$data->h5_4}}" name="h5_4" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Small</label>
                    <input type="text" class="form-control" value="{{$data->small}}" name="small" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Old image</label>
                    <img src="/categoriesimage/{{$data->image1}}">
                </div>


                <div class="mb-3">
                    <label>Change the image</label>
                    <input type="file" class="form-control" name="file1" aria-label="file example" >
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Old image</label>
                    <img src="/categoriesimage/{{$data->image2}}">
                </div>


                <div class="mb-3">
                    <label>Change the image</label>
                    <input type="file" class="form-control" name="file2" aria-label="file example" >
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Old image</label>
                    <img src="/categoriesimage/{{$data->image3}}">
                </div>


                <div class="mb-3">
                    <label>Change the image</label>
                    <input type="file" class="form-control" name="file3" aria-label="file example" >
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Old image</label>
                    <img src="/categoriesimage/{{$data->image4}}">
                </div>


                <div class="mb-3">
                    <label>Change the image</label>
                    <input type="file" class="form-control" name="file4" aria-label="file example" >
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
