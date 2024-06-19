<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>

    <form action="/student/store" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" required>
        </div>

        <div>
            <label for="adress">Address:</label>
            <input type="text" id="adress" name="adress" required>
        </div>

        <div>
            <label for="class">Class:</label>
            <input type="text" id="class" name="class" required>
        </div>

        <div>
            <label for="ICE_number">ICE Number:</label>
            <input type="number" id="ICE_number" name="ICE_number">
        </div>

       

        <button type="submit">Submit</button>
    </form>
</body>
</html>
