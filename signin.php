<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./login.css" rel="stylesheet" >
    <title>Login Form</title>
  </head>
  <body>
        <div class="container-fluid" >
            <form class="mx-auto" picture method="POST" action="./account.php">
                <source srcset="sourceset" type="image/svg+xml" >
                <img
                    src="logo.png"
                    class="img-fluid"
                  
                />
            </picture>
            
                <h4 class="text-center">Sign in</h4>
                <div class="mb-3 mt-5">
                  <label for="exampleInputEmail1" class="form-label">User Name</label>
                  <input name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                  <div id="emailHelp" class="form-text mt-3" ><a href="login.php" style="text-decoration: none;">Create Account?</a> </div>
                </div>
              <center>
                <div>
                  <button type="submit"  class="btn"  style="background-color: pink;" >Log In</button>
                </div>
              </center>
              </form>
              
              <footer><pre> 





                    
              </pre></footer>
        </div>

  </body>
</html>