@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>My Account</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Account</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">    
    <div class="row">
        <style>
* {box-sizing: border-box}

.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #fff;
    width: 30%;
}


.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}


.tab button:hover {
    background-color: #00D09C;
    color:#fff;
}


.tab button.active {
    background-color: #007BFF;
    color:#fff;
}


.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
}
</style>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'profile')" id="defaultOpen">Profile</button>
  <button class="tablinks" onclick="openCity(event, 'bank')">Bank Details</button>
  <button class="tablinks" onclick="openCity(event, 'bookagent')">Book Appointment</button>
</div>

<div id="profile" class="tabcontent">
  <h3>Profile</h3>
  <p><table class="table">
                                            <tbody>
                                            {{--@foreach($users as $user)--}}

                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-user"></i>
                                                    </td>
                                                    <td><strong>Username</strong></td>
                                                    <td>{{$user->username}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-birthday-cake"></i>
                                                    </td>
                                                    <td><strong>Birthday</strong></td>
                                                    <td>{{$user->dob}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-genderless"></i>
                                                    </td>
                                                    <td><strong>Gender</strong></td>
                                                    <td>{{$user->gender}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-phone"></i>
                                                    </td>
                                                    <td><strong>Phone number</strong></td>
                                                    <td>{{$user->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-envelope"></i>
                                                    </td>
                                                    <td><strong>Email</strong></td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-calendar"></i>
                                                    </td>
                                                    <td><strong>Join date</strong></td>
                                                    <td>{{$user->join_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-map-marker"></i>
                                                    </td>
                                                    <td><strong>Address</strong></td>
                                                    <td>{{$user->address}}</td>
                                                </tr>
                                            {{--@endforeach--}}
                                            </tbody>
                                        </table>
                                        {{--{{ $users->links() }}--}}</p>
</div>

<div id="bank" class="tabcontent">
  <h3>Bank Details</h3>
  <table class="table">
                                        <tbody>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-credit-card"></i></td>
                                            <td><strong>Account Holder name</strong></td>
                                            <td>AAAAA</td>

                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-credit-card"></i></td>
                                            <td><strong>Account Number</strong></td>
                                            <td>12**********2458</td>

                                        </tr>
                                        <tr>

                                            <td style="width: 10px" class="text-center"><i class="fa fa-tags"></i></td>
                                            <td><strong>Pf Account Number</strong></td>
                                            <td>15**********4846</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-universal-access"></i></td>
                                            <td><strong>Bank Name</strong></td>
                                            <td>Nepal investment bank</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-accessible-icon"></i></td>
                                            <td><strong>Bank Branch</strong></td>
                                            <td>Butwal</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-code"></i></td>
                                            <td><strong>Ifsc Code</strong></td>
                                            <td>54675</td>
                                        </tr>
                                        </tbody>
                                    </table>
</div>

<div id="bookagent" class="tabcontent">
    <h3>Subscribe with us</h3>
    
</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
        
    </div>
</div>            


@endsection