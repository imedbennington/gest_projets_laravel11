@extends('layouts.app')

@section('title', 'Add category')

@section('css')

@endsection


@section('content')

<div class="row">
    <div class="col-xl-6 mx-auto">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Registration Form</h5>
                <div class="card-body p-4">
                    <h5 class="mb-4">Register</h5>

                    <!-- Display Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Display Error Message -->
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form class="row g-3" method="POST" action="{{ route('register-account') }}">
                    @csrf
                    <div class="col-md-6">
                        <label for="input1" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="input1" placeholder="First Name" name="name">
                    </div>
                    <div class="col-md-12">
                        <label for="input4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="input4" placeholder="Email" name="email">
                    </div>
                    <div class="col-md-12">
                        <label for="input5" class="form-label">Password</label>
                        <input type="password" class="form-control" id="input5" placeholder="Password" name="password">
                    </div>
                    <div class="col-md-12">
                        <label for="input5" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="input5" placeholder="Password" name="password_confirmation">
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                            <button type="button" class="btn btn-light px-4">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@endsection
