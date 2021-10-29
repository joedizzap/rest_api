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
                    <a class="nav-link" style="color:#12a4e3;" href="/show-all-patients">Patient Record</a>
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

    <div class="container" id="editPatient" style="display: none; padding: 30px;">
        <form action="">
        @csrf
            <h1  style="font-size: 22px; font-family:Tahoma; "><center>Patient Record</center></h1> 
            <h1 style="font-size: 12px; font-family:Calibri;"><center>Update records of patient.&nbsp;<span class="hidecon"><a href="/show-all-patients">Hide</a></span></center></h1><br>

            <div class="row addformgrp">
                <input type="hidden" id="editrecord">
                <div class="form-group col-md-3 col-sm-3 addform">
                    <label for="firstname" class="labels">Firstname </label>
                    <input type="text" id="fname" class="form-control fname" name="firstname" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" maxlength="100"required>
                </div>
                <div class="form-group col-lg-3 col-sm-3 addform">
                    <label for="lastname" class="labels">Lastname </label>
                    <input type="text" id="lname" class="form-control" name="lastname" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" maxlength="100" required>
                </div>
                <div class="form-group col-md-3 col-sm-3 addform">
                    <label for="age" class="labels">Age </label>
                    <input type="number" id="age" class="form-control" name="age" required>
                </div>
                <div class="form-group col-md-3 col-sm-3 addform">
                    <label class="labels">Birthdate </label>
                    <input type="text" class="form-control appdates" id="picker" name="birthdate" required>
                </div>
            </div><br>
            <div class="row addformgrp">
                <div class="form-group col-md-2 col-sm-2 addform">
                    <label class="labels">Gender</label><br>
                    <select class="form-control physician" id="gender" name="gender" required>
                        <option value=""></option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>  
                </div>
                <div class="form-group col-md-2 col-sm-2 addform">
                    <label for="phone" class="labels">Phone</label>
                    <input type="text" id="phone" class="form-control phonenum" name="phone" pattern="[0-9]+" minlength="11" maxlength="11" required>
                </div>  
                <div class="form-group col-md-3 col-sm-2 addform">
                    <label for="email" class="labels">Email </label>
                    <input type="text" id="email" class="form-control" name="email" maxlength="254" pattern="(?![_.-])((?![_.-][_.-])[\w.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}" required>
                </div>
                <div class="form-group col-md-2 col-sm-2 addform">
                    <label for="zipcode" class="labels">Zipcode </label>
                    <input type="text" id="zipcode" class="form-control" name="zipcode" required>
                </div>
                <div class="form-group col-md-3 col-sm-2 addform">
                    <label for="address" class="labels">Address</label>
                    <input type="text" id="address" class="form-control" name="address" required>
                </div> 
            </div>
            <br>
                <center><button type="submit" class="btn" style="background-color:#12a4e3; color:white; width: 100%;">Edit Patient Record</button> </center>
        </form>
    </div>

    <div class="container" style="padding: 30px">

        <h1 style="font-size: 22px; font-family:Tahoma; "><center>List Of Patients</center></h1>
        <h1 style="font-size: 12px; font-family:Calibri;"><center>These are the complete list of patient in the clinic.</center></h1><br><br>

        <div class="row justify-content-center scroll">
            <table class="table table_background col-md-12 col-sm-3 col-xs-2">         
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th style="text-align: center">Email Address</th>
                        <th>Phone</th>
                        <th style="text-align: center">Home Address</th>
                        <th>Zipcode</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <br><br><br><br>
    </div>
    
    
    <script type="text/javascript">
        $(document).ready(function() 
        {
                $.ajax({
                    type: 'get',
                    url: 'api/patients',
                    success: function(data){

                        $('tbody').html("");
                        $.each(data.data, function(key,item){
                            $('tbody').append('<tr>\
                                <input type="hidden" class="idd" value="'+item.id+'">\
                                <td>'+item.firstname+'</td>\
                                <td>'+item.lastname+'</td>\
                                <td>'+item.birthdate+'</td>\
                                <td style="text-align: center">'+item.age+'</td>\
                                <td style="text-align: center">'+item.gender+'</td>\
                                <td style="text-align: center">'+item.email+'</td>\
                                <td>'+item.phone+'</td>\
                                <td style="text-align: center">'+item.address+'</td>\
                                <td style="text-align: center">'+item.zipcode+'</td>\
                                <td><span class="deleteid"><i class="cancel fa fa-trash-alt fa-md" title="Delete"></i></span>\
                                    <span class="editid"><i class="edit far fa-edit fa-md" title="Edit"></i></span>\
                                </tr>');
                        });
                    }
                }); 
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() 
        {              
            $(document).on('click','.deleteid', function()
            {
                // getting id
                var delete_id = $(this).closest("tr").find('.idd').val();
     
                var con = confirm('Are you sure you want to delete this record?')
                if(con == true){
                    $.ajax
                    ({
                        type: 'delete',
                        url: 'api/patients/'+delete_id,
                        success: function(data){        
                            alert("Patient Record Deleted Successfully")
                            location.reload();
                        }
                    });
                }

            });
        });
    </script>   

    <script type="text/javascript">
        $(document).ready(function() 
        {              
            $(document).on('click','.editid', function()
            {
                // getting id
                var edit_id = $(this).closest("tr").find('.idd').val();
                
                $.ajax
                ({
                    type: 'get',
                    url: 'api/patients/'+edit_id,
                    success: function(data){        
                        //alert("Patient Record Edited Successfully")
                        /* location.reload(); */
                        //$('tbody').html("");
                        
                        var firstname = data.data.firstname;
                        var lastname = data.data.lastname;
                        var birthdate = data.data.birthdate;
                        var age = data.data.age;
                        var gender = data.data.gender;
                        var email = data.data.email;
                        var phone = data.data.phone;
                        var address = data.data.address;
                        var zipcode = data.data.zipcode;
                        var id = data.data.id;

                        document.getElementById("fname").value = firstname;
                        document.getElementById("lname").value = lastname;
                        document.getElementById("picker").value = birthdate;
                        document.getElementById("age").value = age;
                        document.getElementById("gender").value = gender;
                        document.getElementById("phone").value = phone;
                        document.getElementById("email").value = email;
                        document.getElementById("address").value = address;
                        document.getElementById("zipcode").value = zipcode;
                        document.getElementById("editrecord").value = id;
    
                        $('#editPatient').show();
                    }
                    
                });
            });
        });
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
                var editid= $("#editrecord").val();

                $.ajax({
                    type: 'put',
                    url: 'api/patients/'+editid,
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
                        alert("Patient Successfully Updated");
                    }
                });
            });
        });
    </script>

    <script>
        $('#picker').datetimepicker({
            timepicker: false,
            datepicker: true,
            format: 'Y-m-d', 
            weeks: true
        })
    </script>

@endsection