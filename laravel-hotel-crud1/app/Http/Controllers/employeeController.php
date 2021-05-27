<?php

namespace App\Http\Controllers;

use App\Employee;

use Illuminate\Http\Request;

class employeeController extends Controller
{
    //home
    public function home()
    {
        $employees = Employee::all();
        $i = 1;

        return view('pages.home', compact('employees', 'i'));
    }

    //employee
    public function employee($id)
    {
        $employee = Employee::findOrFail($id);

        return view('pages.employee', compact('employee'));
    }

    //destroy
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('home');
    }

    //edit
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('pages.edit', compact('employee'));
    }

    //update
    public function update(Request $request, $id)
    {
        $validData = $request->validate([
            'firstname'=>'required|string',
            'lastname' => 'required|string',
            'role' => 'required|string',
            'ral' => 'required|numeric',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($validData);

        return redirect()->route('home');
    }
}
