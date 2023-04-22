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
        <h1>Add Product</h1>
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{session()->get('message')}}
        </div>
    @endif

    <form action="{{url('uploadProduct')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="mb-3">
            <label for="validationTextarea" class="form-label">pText</label>
            <input type="text" class="form-control" name="ptext" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter some text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">hText</label>
            <input type="text" class="form-control" name="htext" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter head text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter a description in the textarea.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">button_1</label>
            <input type="text" class="form-control" name="button_1" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter text on button1.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">button_2</label>
            <input type="text" class="form-control" name="button_2" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter text on button2.
            </div>
        </div>


        <div class="mb-3">
            <input type="file" class="form-control" name="file" aria-label="file example" required>
            <div class="invalid-feedback">invalid picture file</div>
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
        </div>
</div>

<!-- partial -->
@include('admin.script')
</body>
</html>
