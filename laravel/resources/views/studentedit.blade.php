<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

   
    <form action="/edit-student/{{$student->id}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $student->name }}" required>
        </div>

        <div>
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" value="{{ $student->surname }}" required>
        </div>

        <div>
            <label for="adress">Address:</label>
            <input type="text" id="adress" name="adress" value="{{ $student->adress }}" required>
        </div>

        <div>
            <label for="class">Class:</label>
            <input type="text" id="class" name="class" value="{{ $student->class }}" required>
        </div>

        <div>
            <label for="ICE_number">ICE Number:</label>
            <input type="number" id="ICE_number" name="ICE_number" value="{{ $student->ICE_number }}">
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>
