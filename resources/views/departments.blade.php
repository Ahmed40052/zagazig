<!DOCTYPE html>
<html>

<head>
    <title>Departments</title>
</head>

<body>

    <h1>Departments</h1>

    <ul>
        @foreach ($departments as $department)
            <li>{{ $department }}</li>
        @endforeach
    </ul>

</body>

</html>
