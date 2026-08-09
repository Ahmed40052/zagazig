<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = [
            'IT',
            'HR',
            'Finance',
            'Marketing'
        ];
        return view('departments', compact('departments'));
        
    }
}
