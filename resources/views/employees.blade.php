<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>A Fancy Table</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Salary</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee['id'] }}</td>
                <td>{{ $employee['name'] }}</td>
                <td>{{ $employee['salary'] }}</td>
            </tr>
        @endforeach


    </table>


</body>
</html>
