<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Comment</title>
</head>
<body>
    <h1>Add Comment</h1>
    <form action="{{ route('comments.store') }}" method="post">
        @csrf
        <label for="employee_id">Employee:</label>
        <select name="employee_id" id="employee_id">
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </select>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
