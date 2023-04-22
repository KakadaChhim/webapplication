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

            <form action="{{url('updateService',$datas->id)}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Icon</label>
                    <input type="text" class="form-control" value="{{$datas->icon}}" name="description" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter a description in the textarea.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">pText</label>
                    <input type="text" class="form-control" value="{{$datas->ptext}}" name="ptext" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter a product name.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">hText</label>
                    <input type="text" class="form-control" value="{{$datas->htext}}" name="htext" id="validationTextarea" placeholder="Required example textarea" required>
                    <div class="invalid-feedback">
                        Please enter a price.
                    </div>
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
