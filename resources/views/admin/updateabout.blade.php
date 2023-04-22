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

            <form action="{{url('updateAbout',$data->id)}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">H6</label>
                    <input type="text" class="form-control" value="{{$data->h_6}}" name="h_6" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter an icon in the textarea.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">H1</label>
                    <input type="text" class="form-control" value="{{$data->h_1}}" name="h_1" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter some text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">P1</label>
                    <input type="text" class="form-control" value="{{$data->p_1}}" name="p_1" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">P2</label>
                    <input type="text" class="form-control" value="{{$data->p_2}}" name="p_2" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">List1</label>
                    <input type="text" class="form-control" value="{{$data->list_1}}" name="list_1" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">List2</label>
                    <input type="text" class="form-control" value="{{$data->list_2}}" name="list_2" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">List3</label>
                    <input type="text" class="form-control" value="{{$data->list_3}}" name="list_3" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">List4</label>
                    <input type="text" class="form-control" value="{{$data->list_4}}" name="list_4" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">List5</label>
                    <input type="text" class="form-control" value="{{$data->list_5}}" name="list_5" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">List6</label>
                    <input type="text" class="form-control" value="{{$data->list_6}}" name="list_6" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Button</label>
                    <input type="text" class="form-control" value="{{$data->button}}" name="button" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter head text.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Old image</label>
                    <img src="/productimage/{{$data->image}}">
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
