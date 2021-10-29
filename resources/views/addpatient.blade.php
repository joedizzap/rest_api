@extends('layout')

@section('content')

    <nav class="navbar navbar-expand-lg {{-- navbar-light bg-light --}}">
        <a class="navbar-brand" href="/home" style="font-weight: bold">&nbsp;&nbsp;Klinika - <span style="color: #12a4e3;">Zamora</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="color:gray;" href="/home">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:gray;" href="/show-all-patients">Patient Record</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:#12a4e3;" href="/register-new-patient">Register New</a>
            </li>
            </ul>
            <div style="margin-left:600px">
                <x-app-layout>
                </x-app-layout>
            </div>
        </div>
    </nav>
    
    <div class="page-section" style="padding: 30px">
        <div class="container">   
            <form action="">
                @csrf

                <h1 style="font-size: 22px; font-family:Tahoma; "><center>Register New Patient</center></h1>
                <h1 style="font-size: 12px; font-family:Calibri;"><center>To add new patient, please fill out the information below.</center></h1><br><br>

                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 col-sm-10">
                        <h1 style="font-size: 20px; color:#12a4e3; font-weight:bold; font-family:Tahoma;">Personal Information</h1><br>
                    </div>
                </div>
                <div class="row justify-content-center addformgrp"> 
                    <div class="form-group col-md-5 col-sm-5 addform">
                        <label for="firstname" class="labels">Firstname <span class="req"> *</span></label>
                        <input type="text" id="fname" class="form-control" name="firstname" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" maxlength="100" placeholder="e.g. Ana Marie" required>
                        {{-- <i class="fas fa-user fa-xs"></i> --}}
                    </div>
                    <div class="form-group col-lg-5 col-sm-5 addform">
                        <label for="lastname" class="labels">Lastname <span class="req"> *</span></label>
                        <input type="text" id="lname" class="form-control" name="lastname" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" maxlength="100" placeholder="e.g. Santos" required>
                        {{-- <i class="fas fa-user fa-xs"></i> --}}
                    </div>
                </div>   
                <br> 
                <div class="row justify-content-center addformgrp">
                    <div class="form-group col-md-5 col-sm-5 addform">
                    <label for="email" class="labels">Email <span class="req"> *</span></label>
                    <input type="text" id="email" class="form-control" name="email" maxlength="254" pattern="(?![_.-])((?![_.-][_.-])[\w.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}" placeholder="e.g. anamarie123@gmail.com" required>
                    {{-- <i class="fas fa-envelope fa-xs"></i> --}}
                    </div>
                    <div class="form-group col-md-5 col-sm-5 addform">
                        <label class="labels">Birthdate <span class="req"> *</span></label>
                        <input type="text" class="form-control appdates" id="picker" name="birthdate" placeholder="e.g. 1998-11-22" required>
                        {{-- <i class="fas fa-calendar-check fa-xs"></i> --}}
                    </div>
                </div> 
                <br>
                <div class="row justify-content-center addformgrp">
                    <div class="form-group col-md-5 col-sm-5 addform">
                        <label for="zipcode" class="labels">Zipcode <span class="req"> *</span></label>
                        <input type="text" id="zipcode" class="form-control" name="zipcode" placeholder="e.g. 6524" required>
                        {{-- <i class="fas fa-pencil-alt fa-xs"></i> --}}
                    </div>
                    <div class="form-group col-md-5 col-sm-5 addform">
                    <label for="phone" class="labels">Phone<span class="req"> *</span></label>
                    <input type="text" id="phone" class="form-control phonenum" name="phone" pattern="[0-9]+" minlength="11" maxlength="11" placeholder="e.g. 09303452312" required>
                    {{-- <i class="fas fa-phone fa-xs"></i> --}}
                    </div>   
                </div>
                <br>
                <div class="row justify-content-center addformgrp">
                    <div class="form-group col-md-5 col-sm-5 addform">
                        <label for="age" class="labels">Age <span class="req"> *</span></label>
                        <input type="number" id="age" class="form-control" name="age" placeholder="e.g. 22" required>
                        {{-- <i class="fas fa-pencil-alt fa-xs"></i> --}}
                    </div>
                    <div class="form-group col-md-5 col-sm-5 addform">
                        <label class="labels">Select Gender<span class="req"> *</span></label><br>
                        <select class="form-control physician" id="gender" name="gender" required>
                            <option value=""></option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>  
                        {{-- <i class="fas fa-user fa-xs"></i> --}}
                    </div>
                </div>
                <br>
                <div class="row justify-content-center addformgrp">
                    <div class="form-group col-md-10 col-sm-10 addform">
                        <label for="address" class="labels">Home Address <span class="req"> *</span></label>
                        <input type="text" id="address" class="form-control" name="address" placeholder="e.g. Concepcion Hilongos Leyte" required>
                        {{-- <i class="fas fa-pencil-alt fa-xs"></i> --}}
                    </div> 
                </div>           
                <br>
                <center><button type="submit" class="btn" style="background-color:#12a4e3; color:white;">Add New Patient</button> </center>
                <br><br>
            </form>
        </div>
    </div>
    

    <script>
        $('#picker').datetimepicker({
            timepicker: false,
            datepicker: true,
            format: 'Y-m-d', 
            weeks: true
        })
    </script>

    <script>
        $(document).ready(function()
        {
            $("form").submit(function(){

                var fname = $("#fname").val();
                var lname = $("#lname").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var zipcode = $("#zipcode").val();
                var picker = $("#picker").val();
                var age = $("#age").val();
                var gender = $("#gender").val();
                var address = $("#address").val();

                $.ajax
                ({
                    type: 'post',
                    url: 'api/patients/',
                    data: {'firstname':fname,
                            'lastname':lname,
                            'email':email,
                            'birthdate':picker,
                            'zipcode':zipcode,
                            'phone':phone,
                            'age':age,
                            'gender':gender,
                            'address':address,
                          },
                    success: function(data)
                    {        
                        alert("Patient Successfully Recorded");
                    }
                });
            });
        });
    </script>
   
@endsection