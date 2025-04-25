<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="container">
        <div class="contain">
            <h1>Teachers Overview 📃</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->id }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->surname }}</td>
                            <td>
                                <a href="teachers/{{ $teacher->id }}">See details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>