<!DOCTYPE html>
<html>
<head>
  <title>Staff Registration</title>
  <style type="text/css"></style>
</head>
</style>


<!-- Staffregistration.blade.php -->

@include('headerfooter.header')
@include('SideBar.AdminMenu')
<body bgcolor="gray"><br/><br/><br/>
  <div align="center">
  <font color="white" ><h1><i>Staff Registration</i></h1></font>
</div>
<legend>
<form action="{{URL::To('stffreg_action')}}" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  
<!-- <div id="Head"><h1>Add Member</h1></div>   -->
<div id="box">
        <div class='itemName'>
          <h3>Staff_Name</h3>  
        </div>
        <div class="items">
          <input type='text' name='sname' >
        </div>
        
          <div class="itemName">
          <h3>User_Name</h3>
        </div>
        <div class="items">
          <input type='text' name='username' >
        </div>

          <div class="itemName">
          <h3>Password</h3>
        </div>
        <div class="items">
          <input type='password' name='password' value="">
         <!--  <input type='checkbox' name='mdes' value="trainee">Trainee -->
        </div>
        <div class="itemName">
          <h3>Confirm_Password</h3>
        </div>
        <div class="items">
          <input type='password' name='cpass' value="">
        </div>
        <div class="itemName">
          <h3>EMP_Code</h3>
        </div>
        <div class="items">
          <input type='text' name='empcode' >
        </div>
        <div class="itemName">
          <h3>Designation</h3>
        </div>
        <div class="items">
          <input type='text' name='designation' >
        </div>
        <div class="itemName">
          <h3>Email_id</h3>
        </div>
        <div class="items">
          <input type='text' name='email' >
        </div>
        <div class="itemName">
          <h3>Department</h3>
        </div>
        <div class="items">
         <!--  <input type='text' name='department' > -->
         <select name="dep" id="department">
         <option value="Computer Science" id=" ">select</option>
         <option value="Computer Science" id=" ">Computer Science</option>
         <option value="Electronics" id=" ">Electronics</option>
         <option value="Civil" id=" ">Civil</option>
         <option value="Mechanical" id=" ">Mechanical</option>
         <option value="Chemical" id=" ">Chemical</option>
         <option value="IT" id=" ">IT</option>
         </select>
        </div>
        <div class="items1">
        <input type='Submit' name='sub' value="Register" id="reg">
        </div>
</form>
</body>
</html>