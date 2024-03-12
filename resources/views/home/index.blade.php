@extends('layouts.app')
@section('title',$viewData['title'])
@section('subtitle','Prenotazione Colloqui')
@section('content')
<div class="row">
  <form method="post">
    <div class="col-md-6 col-lg-4 md-2">
      <label>Login</label>
      <br>
      <input type="text" name="txtUsername" id="txtUsername" placeholder="Username">
      <br>
      <input type="password" name="txtPassword" id="txtPassword" placeholder="Password">
      <br>
      <input type="submit" value="LOGIN">
    </div>
  </form>
  <form method="post">
    <div class="col-md-6 col-lg-4 md-2">
      <label>SignIn</label>
      <br>
      <input type="text" name="txtUsername" id="txtUsername" placeholder="Username">
      <br>
      <input type="text" name="txtEmail" id="txtEmail" placeholder="Email">
      <br>
      <input type="Password" name="txtPassword" id="txtPassword" placeholder="Password">
      <br>
      <input type="submit" value="SIGNIN">

    </div>
  </form>
</div>

@endsection