@extends('layouts.app')

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
    <h1>Create Project</h1>

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Project Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter project name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter project description" required></textarea>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Create Project</button>
        </div>
    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
