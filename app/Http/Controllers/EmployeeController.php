<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // Logika wyświetlania listy pracowników
        $employees = Employee::all();
        return view('employees', ['employees' => Employee::all()]);
    }

    public function create()
    {
        // Logika tworzenia nowego pracownika
        return view('employees.create');
    }

    public function store(Request $request)
    {
        // Logika zapisywania nowego pracownika do bazy danych
        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        // Logika edycji informacji o pracowniku
        $employee->update($request->all());
        return redirect()->route('employees.index');

    }

    public function update(Request $request, Employee $employee)
    {
        // Logika aktualizacji informacji o pracowniku w bazie danych
        $employee->delete();
        return redirect()->route('employees.index');
    }

    // Inne metody...
}
