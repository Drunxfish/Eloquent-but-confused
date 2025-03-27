<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subjects</title>
</head>

<body>

    {{-- Display the subjects data --}}
    <table border="1">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Entry Date</th>
                <th>Subjects</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $teacherOverview->name }}</td>
                <td>{{ $teacherOverview->surname }}</td>
                <td>{{ $teacherOverview->entry_date }}</td>
                <td>
                    @if (!empty($teacherOverview->subjects))
                        <ul>
                            @foreach ($teacherOverview->subjects as $subject)
                                <li>{{ $subject->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        No subjects assigned
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/teachers">Go back</a>
</body>

</html>