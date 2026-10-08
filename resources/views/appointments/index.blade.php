<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('doctors.index') }}">Doctors</a>
    <a href="{{ route('patients.index') }}">Patients</a>
    <a href="{{ route('appointments.index') }}">Appointments</a>
  
</body>
</html>