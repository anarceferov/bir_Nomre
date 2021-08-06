<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="turbolinks-cache-control" content="no-cache">
    <title>Bir Nömrə</title>
    <link rel="stylesheet" href="{{asset('back/css/sb-admin-2.css')}}">
    <link href="{{asset('back/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @toastr_css

    @yield('css')

    <style>
        .turbolinks-progress-bar {
            visibility: hidden;
        }
    </style>
</head>

<body id="page-top">
