<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose which month to display</title>
</head>
<body>
    <h1>Choose which month to display</h1>
    <form action="{{ route('months.store') }}" method="post">
        @csrf
        <label for="date">Month and year (MM/YYYY):</label>
        <input type="text" id="date" name="date">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
