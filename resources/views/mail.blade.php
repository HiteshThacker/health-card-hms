<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        th{
            font-size: 1.5rem;
        }
        td{
            font-size: 1rem;
        }
    </style>
</head>
<body>


    <table class="table" border='2'>
        <tr>
            <th>Name</th>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <th>Number</th>
            <td>{{$no}}</td>
        </tr>
        <tr>
            <th>Time</th>
            <td>{{$time}}</td>
        </tr>
        <tr>
            <th>Plan</th>
            <td>{{$plan}}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{$date}}</td>
        </tr>
    </table>
</body>
</html>



