@extends('layouts.app')

@section('title', 'Instructor Details')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h3 class="mb-0">
                        Instructor Details
                    </h3>

                    <span class="badge bg-primary">
                        ID: {{ $instructor->id }}
                    </span>

                </div>

                <div class="card-body">

                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">
                            Name
                        </div>

                        <div class="col-md-8">
                            {{ $instructor->name }}
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">
                            Email
                        </div>

                        <div class="col-md-8">
                            {{ $instructor->email }}
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">
                            Phone
                        </div>

                        <div class="col-md-8">
                            {{ $instructor->phone }}
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">
                            Subject
                        </div>

                        <div class="col-md-8">
                            {{ $instructor->subject }}
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">
                            Salary
                        </div>

                        <div class="col-md-8">
                            {{ $instructor->salary }}
                        </div>
                    </div>

                </div>

                <div class="card-footer">

                    <a href="/instructors"
                       class="btn btn-secondary">
                        Back
                    </a>

                    <a href="/instructors/{{ $instructor->id }}/edit"
                       class="btn btn-warning">
                        Update
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
