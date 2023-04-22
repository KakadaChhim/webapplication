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

    <form action="{{url('uploadAbout')}}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="mb-3">
            <input type="file" class="form-control" name="file" aria-label="file example" required>
            <div class="invalid-feedback">invalid picture file</div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">H6</label>
            <input type="text" class="form-control" name="h_6" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter an icon in the textarea.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">H1</label>
            <input type="text" class="form-control" name="h_1" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter some text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">P1</label>
            <input type="text" class="form-control" name="p_1" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter head text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">P2</label>
            <input type="text" class="form-control" name="p_2" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter head text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">List1</label>
            <input type="text" class="form-control" name="list_1" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter head text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">List2</label>
            <input type="text" class="form-control" name="list_2" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter head text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">List3</label>
            <input type="text" class="form-control" name="list_3" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter head text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">List4</label>
            <input type="text" class="form-control" name="list_4" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter head text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">List5</label>
            <input type="text" class="form-control" name="list_5" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter head text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">List6</label>
            <input type="text" class="form-control" name="list_6" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Please enter head text.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Button</label>
            <input type="text" class="form-control" name="button" id="validationTextarea" placeholder="Required example textarea" required>
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
