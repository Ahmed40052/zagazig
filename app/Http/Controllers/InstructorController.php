<?php

namespace App\Http\Controllers;

use App\models\Instructor;
use Illuminate\Http\Request;
use App\Http\Requests\InstructorRequest;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::all();

        return view('instructors.index', [
            'instructors' => $instructors,
        ]);
    }

    public function create()
    {
        return view('instructors.create');
    }

    public function store(InstructorRequest $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:instructors,email',
        //     'phone' => 'required|digits:11',
        //     'subject' => 'required',
        //     'salary' => 'required|numeric',
        // ]);
        Instructor::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'salary' => $request->salary,
        ]);

        return redirect('/instructors');
    }

    // route model binding
    public function show(Instructor $instructor)
    {
        return view('instructors.show', [
            'instructor' => $instructor,
        ]);
    }

    public function edit(Instructor $instructor)
    {

        return view('instructors.edit', [
            'instructor' => $instructor,
        ]);
    }

    public function update(InstructorRequest $request, Instructor $instructor)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:instructors,email,'.$instructor->id,
        //     'phone' => 'required',
        //     'subject' => 'required',
        //     'salary' => 'required|numeric',
        // ]);

        $instructor->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'salary' => $request->salary,
        ]);

        return redirect('/instructors');
    }

    public function destroy(Instructor $instructor)
    {

        $instructor->delete();

        return redirect('/instructors');
    }
}
