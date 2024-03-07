@extends('layout') <!-- Extending the layout blade file -->

@section('title', 'Login') <!-- Setting the title section -->

@section('content') <!-- Beginning of the content section -->

<div class="container"> <!-- Container for the login form -->

    <div class="mt-5"> <!-- Margin top -->

        @if($errors->any()) <!-- Displaying errors if any -->

        <div class="col-12 border border-danger rounded p-3 mb-3"> <!-- Styling for error messages -->

            @foreach($errors->all() as $error) <!-- Looping through each error message -->

            <div class="alert alert-danger">{{$error}}</div> <!-- Displaying each error message -->

            @endforeach

        </div>

        @endif

        @if(session()->has('error')) <!-- Displaying session error messages -->

        <div class="alert alert-danger border border-danger rounded p-3 mb-3">{{session('error')}}</div> <!-- Displaying session error message -->

        @endif

        @if(session()->has('success')) <!-- Displaying session success messages -->

        <div class="alert alert-success border border-success rounded p-3 mb-3">{{session('success')}}</div> <!-- Displaying session success message -->

        @endif

    </div>

    <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-auto border border-primary rounded p-3" style="width: 500px;"> <!-- Login form -->

        @csrf <!-- CSRF protection -->

        <div class="mb-3"> <!-- Email input field -->

            <label class="form-label">Email address</label> <!-- Label for Email -->

            <input type="email" class="form-control" name="email"> <!-- Input field for Email -->

        </div>

        <div class="mb-3"> <!-- Password input field -->

            <label for="exampleInputPassword1" class="form-label">Password</label> <!-- Label for Password -->

            <input type="password" class="form-control" name="password"> <!-- Input field for Password -->

        </div>

        <button type="submit" class="btn btn-primary">Submit</button> <!-- Submit button -->

    </form>

</div>

@endsection <!-- End of content section -->
