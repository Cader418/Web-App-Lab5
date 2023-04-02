<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="bbcss.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
           <div class="row col-md-6 login mx-auto text-center mt-5 p-4">
                <p1 class="mt-2">Login</p1>
                <form action="redirect.php" method="POST">
                    <p2> User ID: </p2> 
                    <input type="text" name = "user_id"> <br>
                    <p2> Password: </p2> 
                    <input type="text" name = "user_psw"> <br>
                    <p2> Enter Captcha Code: </p2>
                    <img src="captcha.php"/>
                    <input type="text" name = "vercode"> <br>
                    <input class="btn" type="submit"> </input>
                </form>
           </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>