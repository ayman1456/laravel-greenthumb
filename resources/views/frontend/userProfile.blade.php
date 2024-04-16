@extends('layout.UserProfileLayout')
@section('userProfile')
<h2>My profile</h2>

<form action="" method="POST">
    @csrf

    <div class="row my-3">
        <div class="col-md-6"><input placeholder="User Name" type="text" class="form-control"></div>
        <div class="col-md-6"><input placeholder="Email" type="text" class="form-control"></div>
    </div>
    <textarea name="address" class="form-control" placeholder="Address"></textarea>
    <div class="row my-3">
        <div class="col-md-6"><input placeholder="Phone" type="text" class="form-control"></div>
        <div class="col-md-6"><input placeholder="Post Code" type="text" class="form-control"></div>
    </div>
    <button class="btn-general">Update Profile</button>

</form>

@endsection