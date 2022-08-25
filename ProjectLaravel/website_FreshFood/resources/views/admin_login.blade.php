<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"><link rel="stylesheet" href="{{asset('public/backend/css/styles.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->

<form class="login" action="{{URL::to('admin/home')}}" method="post">
  @csrf
  <input type="text" placeholder="Email" name="admin_email">
  <input type="password" placeholder="Password" name="admin_password">
  <button type="submit" style="width: 110px">Đăng nhập</button>
  <?php
  $message = Session::get('message');
  if($message)
  {
    echo '<span class="text-message">' .$message. '</span>';
    Session::put('message', null);
  }
?>
</form>


<!-- partial -->
  
</body>
</html>