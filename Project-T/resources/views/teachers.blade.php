<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers</title>
</head>
<body>
    {{-- Display the teachers data --}}
    <h1>Teachers</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->name }}</td>
                    <td>
                        <a href="teachers/{{ $teacher->id }}">View Overview</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>