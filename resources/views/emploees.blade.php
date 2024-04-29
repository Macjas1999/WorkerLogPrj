<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Employees</title>
</head>
<body>
    <h1>List of Employees</h1>
    <ul>
        @foreach ($employees as $employee)
            <li>{{ $employee->name }}</li>
        @endforeach
    </ul>
</body>
</html>
