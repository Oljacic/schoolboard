<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 30%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <table >
        <thead>
        <tr>
            <th>id</th>
            <th>ime</th>
            <th>schoolboard</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $student) : ?>
                <tr>
                    <td><?php echo $student->id; ?></td>
                    <td><a href="student/<?php echo $student->id; ?>"><?php echo $student->name; ?></a></td>
                    <td><?php echo $student->school->name; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
