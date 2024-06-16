<?php
namespace App\Http\Controllers;

use App\Models\WorkHour;
use App\Models\Employee;
use Illuminate\Http\Request;

class WorkHoursController extends Controller
{
    public function index()
    {
        $workHours = WorkHour::with('employee')->get();
        return view('work_hours.index', compact('workHours'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('work_hours.create', compact('employees'));
    }

    public function store(Request $request)
    {
        WorkHour::create($request->all());
        return redirect()->route('work_hours.index');
    }

    public function show(WorkHour $workHour)
    {
        return view('work_hours.show', compact('workHour'));
    }

    public function edit(WorkHour $workHour)
    {
        $employees = Employee::all();
        return view('work_hours.edit', compact('workHour', 'employees'));
    }
    public function update(Request $request, WorkHour $workHour)
    {
        $workHour->update($request->all());
        return redirect()->route('work_hours.index');
    }
}
