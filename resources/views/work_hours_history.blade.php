<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Hours History</title>
</head>
<body>
    <h1>Work Hours History</h1>
    <table>
        <thead>
            <tr>
                <th>Employee</th>
                <th>Date</th>
                <th>Hours</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($work_hours as $work_hour)
                <tr>
                    <td>{{ $work_hour->employee->name }}</td>
                    <td>{{ $work_hour->date }}</td>
                    <td>{{ $work_hour->hours }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
