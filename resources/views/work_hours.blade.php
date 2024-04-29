<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Work Hours</title>
</head>
<body>
    <h1>Add Work Hours</h1>
    <form action="{{ route('work_hours.store') }}" method="post">
        @csrf
        <label for="employee_id">Employee:</label>
        <select name="employee_id" id="employee_id">
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </select>
        <!-- Add other input fields for work hours -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>
