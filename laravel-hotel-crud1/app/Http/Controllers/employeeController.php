<?php

namespace App\Http\Controllers;

use App\Employee;

use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function home()
    {
        $employees = Employee::all();
        $i = 1;

        return view('pages.home', compact('employees', 'i'));
    }

    public function employee($id)
    {
        $employee = Employee::findOrFail($id);

        return view('pages.employee', compact('employee'));
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('home');
    }
}
