@extends('layouts.app')

@section('title', 'Instructors')

@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Instructors</h1>

        <a href="/instructors/create" class="btn btn-success">
            Add New Instructor
        </a>
    </div>

    <div class="table-responsive">

        <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Salary</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($instructors as $instructor)

                    <tr>
                        <td>{{ $instructor->id }}</td>
                        <td>{{ $instructor->name }}</td>
                        <td>{{ $instructor->email }}</td>
                        <td>{{ $instructor->phone }}</td>
                        <td>{{ $instructor->subject }}</td>
                        <td>{{ $instructor->salary }}</td>

                        <td class="text-center">

                            <div class="d-flex justify-content-center gap-2">

                                <a href="/instructors/{{ $instructor->id }}"
                                   class="btn btn-sm btn-primary">
                                    Show
                                </a>

                                <a href="/instructors/{{ $instructor->id }}/edit"
                                   class="btn btn-sm btn-warning">
                                    Update
                                </a>

                                <form action="/instructors/{{ $instructor->id }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this instructor?')">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </td>
                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection
