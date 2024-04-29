<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
</head>
<body>
    <h1>Add New Employee</h1>
    <form action="{{ route('employees.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <!-- Add other input fields for employee details -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>
