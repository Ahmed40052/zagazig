@extends('layouts.app')

@section('title', 'Add Instructor')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header">
                    <h3 class="mb-0">Add New Instructor</h3>
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

                    <form action="/instructors" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Name
                            </label>

                            <input type="text"
                                   id="name"
                                   name="name"
                                   class="form-control"
                                   placeholder="Instructor name"
                                   value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email
                            </label>

                            <input type="email"
                                   id="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Instructor email"
                                   value="{{ old('email') }}">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">
                                Phone
                            </label>

                            <input type="text"
                                   id="phone"
                                   name="phone"
                                   class="form-control"
                                   placeholder="Instructor phone"
                                   value="{{ old('phone') }}">
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">
                                Subject
                            </label>

                            <input type="text"
                                   id="subject"
                                   name="subject"
                                   class="form-control"
                                   placeholder="Instructor subject"
                                   value="{{ old('subject') }}">
                        </div>

                        <div class="mb-3">
                            <label for="salary" class="form-label">
                                Salary
                            </label>

                            <input type="number"
                                   id="salary"
                                   name="salary"
                                   class="form-control"
                                   placeholder="Instructor salary"
                                   value="{{ old('salary') }}">
                        </div>

                        <div class="d-flex gap-2">

                            <button type="submit" class="btn btn-success">
                                Add Instructor
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
