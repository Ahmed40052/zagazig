@extends('layouts.app')

@section('title', 'Update Instructor')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card shadow">

                    <div class="card-header">
                        <h3 class="mb-0">Update Instructor</h3>
                    </div>

                    <div class="card-body">

                        @if ($errors->any())

                            <div class="alert alert-danger">

                                <ul class="mb-0">

                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>

                            </div>

                        @endif

                        <form action="/instructors/{{ $instructor->id }}" method="POST">

                            @csrf

                            @method('PUT')

                            <div class="mb-3">

                                <label for="name" class="form-label">
                                    Name
                                </label>

                                <input type="text" id="name" name="name" class="form-control"
                                    value="{{ old('name', $instructor->name) }}">

                            </div>

                            <div class="mb-3">

                                <label for="email" class="form-label">
                                    Email
                                </label>

                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{ old('email', $instructor->email) }}">

                            </div>

                            <div class="mb-3">

                                <label for="phone" class="form-label">
                                    Phone
                                </label>

                                <input type="text" id="phone" name="phone" class="form-control"
                                    value="{{ old('phone', $instructor->phone) }}">

                            </div>

                            <div class="mb-3">

                                <label for="subject" class="form-label">
                                    Subject
                                </label>

                                <input type="text" id="subject" name="subject" class="form-control"
                                    value="{{ old('subject', $instructor->subject) }}">

                            </div>

                            <div class="mb-3">

                                <label for="salary" class="form-label">
                                    Salary
                                </label>

                                <input type="number" id="salary" name="salary" class="form-control"
                                    value="{{ old('salary', $instructor->salary) }}">

                            </div>

                            <div class="d-flex gap-2">

                                <button type="submit" class="btn btn-warning">
                                    Update Instructor
                                </button>

                                <a href="/instructors" class="btn btn-secondary">
                                    Cancel
                                </a>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
