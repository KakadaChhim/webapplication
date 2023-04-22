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
        <h1>Add New Service</h1>
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{session()->get('message')}}
        </div>
    @endif

    <form action="{{url('uploadService')}}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Icon</label>
            <input type="text" class="form-control" name="icon" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter an icon in the textarea.
            </div>
        </div>

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
            <input type="submit" class="btn btn-success">
        </div>
    </form>
</div>
</div>

<!-- partial -->
@include('admin.script')
</body>
</html>
