<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    form {
      width: 600px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      padding: 20px 30px 30px;
      border-radius: 5px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>

</head>

<body>

  <form action="registration.php" method="POST">
    <h3 class="mb-2 text-center">Registration Form</h3>
    <div class="mb-3">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control form-control-lg">
    </div>
    <div class="mb-3">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control form-control-lg">
    </div>
    <div class="mb-3">
      <label for="password">Password</label>
      <input type="text" name="password" id="password" class="form-control form-control-lg">
    </div>
    <div class="mb-3">
      <label for="password_confirmation">Confirm Password</label>
      <input type="text" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg">
    </div>
    <div class="mb-2">
      <input type="submit" class="btn btn-primary w-100 btn-lg" value="Register">
    </div>
    Already have an account? <a href="loginForm.php">Login</a>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>