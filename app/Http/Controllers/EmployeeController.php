<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('salary')->get();
        return view('employees.index', compact('employees'));

    }
    public function show($id)
{
    $employee = Employee::findOrFail($id);
    return view('employees.show', compact('employee'));
}
    
}