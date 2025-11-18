@extends('layouts.clean',['cssClass'=>'page-signup'])
@section('title','SignUp')
@section('childContent')

<main class="d-inline-block w-100 justify-content-center items-center">
    <form action="" class="form w-75 m-auto bg-light p-3">
        <h4> Please Sign Up First</h4>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
            </div>
            </div>
            <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword">
            </div>
            </div>
    </form>
</main>
@endsection