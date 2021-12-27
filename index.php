<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .passfield {
            position: relative;
        }
        .passfield i{
            width: 40px;
            height: 40px;
            background-color: tomato;
            color: #fff;
            text-align: center;
            line-height: 40px;
            border-radius: 5px;
            position: absolute;
            top: 30px;
            right: 1px;
        }
    </style>
  </head>
  <body>

  <section>
      <div class="container">
          <div class="row">
              <div class="col-lg-6 m-auto">
                  <div class="card">
                    <div class="card-header bg-primary text-center">
                        <h3 class="text-white">Form Validation</h3>
                    </div>
                    <div class="card-body">
                        <form action="post.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Your Full Name</label>
                                <input type="text" class="form-control" name="fname">
                                <?php
                                    if(isset($_GET["nameAlart"])){ ?>
                                    <div class="alert alert-danger" role="alert">
                                        Name field is require
                                    </div>
                                <?php } ?>   
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Your Email</label>
                                <input type="text" class="form-control" name="email">

                                <?php
                                    if(isset($_GET["emailAlart"])){ ?>
                                    <div class="alert alert-danger" role="alert">
                                        email field is require
                                    </div>
                                <?php } ?>  
                            </div>
                            <div class="mb-3 passfield">
                                <label class="form-label">Your Password</label>
                                <input id="pass" type="password" class="form-control" name="password">
                                <i class="fa fa-eye" onclick="passhsow()"></i>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password">
                            </div>
                            <?php
                                    if(isset($_GET["passAlart"])){ ?>
                                    <div class="alert alert-danger" role="alert">
                                        password field is require
                                    </div>
                                <?php } ?>  
                                <?php
                                    if(isset($_GET["notpassAlart"])){ ?>
                                    <div class="alert alert-danger" role="alert">
                                       confirm password not match
                                    </div>
                                <?php } ?>  
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </section>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>

        function passhsow(){
            var x = document.getElementById('pass');
            if(x.type === 'password'){
                x.type = 'text';
            }
            else {
                x.type = 'password';
            }
        }

    </script>
  </body>
</html>