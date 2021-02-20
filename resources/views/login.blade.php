@extends('master')
@section("content")

<<<<<<< HEAD
<?php
/*
try {
  //$db = DB::connection()->getPdo();
  if(DB::connection()->getDatabaseName()){
      echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
  }else{
      die("Could not find the database. Please check your configuration.");
  }
} catch (\Exception $e) {
  die("Could not open connection to database server.  Please check your configuration.");
}*/
?>

=======
>>>>>>> 4976452c0048139c14a5de981584aff8e0a0c1a5
<div class="container">
<div class="row">
<div class="col-sm-4 offset-sm-4" style="padding-top:50px; padding-bottom:50px;">

<<<<<<< HEAD
<form action="login" method="POST">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
=======
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
>>>>>>> 4976452c0048139c14a5de981584aff8e0a0c1a5
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
<<<<<<< HEAD
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
=======
    <input type="password" class="form-control" id="exampleInputPassword1">
>>>>>>> 4976452c0048139c14a5de981584aff8e0a0c1a5
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<<<<<<< HEAD
=======


>>>>>>> 4976452c0048139c14a5de981584aff8e0a0c1a5
</div>
</div>
</div>

<<<<<<< HEAD
<?php
/*

Submit - > login -> session_start(); -> username or passoword = match -> true -> $_SESSION['is_login'] = true; 


*/
?>
=======
>>>>>>> 4976452c0048139c14a5de981584aff8e0a0c1a5
@endsection

