@extends('layout')

@section('content')

    <nav class="navbar navbar-expand-lg{{--  navbar-light bg-light --}}">
        <a class="navbar-brand" href="/home" style="font-weight: bold">&nbsp;&nbsp;Klinika - <span style="color: #12a4e3;">Zamora</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="color:#12a4e3;" href="/home">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:gray;" href="/show-all-patients">Patient Record</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:gray;" href="/register-new-patient">Register New</a>
            </li>
            </ul>
            <div style="margin-left:600px">
                <x-app-layout>
                </x-app-layout>
            </div>
        </div>
    </nav>

    <div class="container">
        <br><br><br><br><br><br><br>
        <h2 style="color: #12a4e3; font-size:50px"> <center> Welcome to Klinika Zamora </center> </h2>
        <p> <center> We Care For Your Health Every Moment </center> </p>
    </div>
@endsection