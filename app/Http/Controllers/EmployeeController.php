<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::where('salary', 400)
            ->orWhere('id', '>', 4)
            ->orderBy('id')
            ->get();
        
        return view('employees.index', compact('employees'));
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function filtered(Request $request)
    {
        $validated = $request->validate([
            'min_salary' => 'nullable|numeric',
            'max_salary' => 'nullable|numeric',
        ]);

        $employees = Employee::where('salary', 400)
            ->orWhere('id', '>', 4)
            ->orderBy('id')
            ->get();

        return view('employees.filtered', compact('employees'));
    }

    public function filteredEmployees()
    {
        $employees = Employee::where(function($query) {
                $query->whereBetween('salary', [400, 800])
                      ->orWhere('position', 'программист');
            })
            ->orderBy('id')
            ->get();

        return view('employees.filtered400-800', compact('employees'));
    }

    public function totalSalary()
    {
        $total = Employee::sum('salary');
        return view('employees.total_salary', ['total' => $total]);
    }

    public function salaryByPosition()
{
    $salaries = Employee::select(
        'position',
        DB::raw('SUM(salary) as total_salary')
    )
    ->groupBy('position')
    ->get();

    return view('employees.salary_by_position', compact('salaries'));
}

public function birthday25()
{
    $employees = Employee::whereDay('birthday', 25)->get();
    return view('employees.birthday_25', compact('employees'));
}

public function bornIn1990()
{
    $employees = Employee::whereYear('birthday', 1990)->get();
    return view('employees.born_1990', compact('employees'));
}

}

