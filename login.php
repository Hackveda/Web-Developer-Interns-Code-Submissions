<?php
include 'config.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        form{
            margin-top: 6em;
            margin-left: 25em;
            margin-right: 10em;
            padding: 30px;
            box-shadow: 10px 10px 8px #888888;
        }
        a{
            margin-top: 6em;
            margin-left: 25em;
            padding: 30px;
            background-color:blanchedalmond;
            margin-top: 20px;
            border-radius: 30px;
            padding-top: 10px;
            text-decoration: none;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <form method="post" >
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" >Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <a href="register.html">New user..Register</a>
          </form><br>
    </div>
  </body>
</html>