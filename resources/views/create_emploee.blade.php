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

        <label for="surname">Surame:</label>
        <input type="text" id="surname" name="surname">

        <label for="email">Email adress:</label>
        <input type="text" id="email" name="email">

        <label for="contact_number">Phone number:</label>
        <input type="text" id="contact_number" name="contact_number">

        <label for="position">Position in company:</label>
        <input type="text" id="position" name="position">

        <label for="sallary_per_hour">Sallary per hour:</label>
        <input type="text" id="sallary_per_hour" name="sallary_per_hour">

        <label for="date_of_birth">Date of birth:</label>
        <input type="text" id="date_of_birth" name="date_of_birth">

        <label for="date_of_employment">Date of employment:</label>
        <input type="text" id="date_of_employment" name="date_of_employment">
        <!-- Add other input fields for employee details -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>
