<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script src="https://kit.fontawesome.com/8e23d86a11.js" crossorigin="anonymous"></script>


    <title>Sign Up</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/style_login.css')}}"/>

  </head>
    <body>
        <div class="menu">
            <ul id="navigasi">
                <div id="logo">
                    <img src="/asset/logo-dd.png" style="width: 40%; margin: 6px;">
                </div>                
                <li><a href="#"><i class="fas fa-bars "></i></a></li>
                <li><a href="/uangku">Home</a></li>
            </ul>
        </div>

        <center><div class="container" style="margin-top: 110px;"></center>
        <form action="{{url('store')}}" method="post" >
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <div class="card" style="width: 380px; height: 350px; margin-left:120px;">
                <div class="card-body">
                <label style="text-align: left; margin:20px;margin-left: 5px;margin-top:5px; font-size: 25px;"><b>Register</b></label>
                
                    <center>
                    {{csrf_field()}}
                    <div class="form-group">
                    <input type="text" class="form-control" id="inputdata" placeholder="Nama Lengkap" name="nama_lengkap" style="width:330px;border-radius: 8px; background-color: #EFE9E9; border:none;">
                    </div>     

                    <div class="form-group">
                    <input type="text" class="form-control" id="inputdata" placeholder="Email" name="username" style="width:330px;border-radius: 8px; background-color: #EFE9E9; border:none;">
                    </div>

                    <div class="form-group">
                    <input type="password" class="form-control" id="inputdata" placeholder="Password" name="password" style="width:330px; border-radius: 8px; background-color: #EFE9E9; border:none;">
                    </div>
                    
                    <center><button type ="submit" class="btn-regist btn-primary btn-sm" href="{{('/uangku')}}" style="width:120px; padding:1px; border-radius: 5px; font-weight:bold; margin: 25px;backgrounf-color: #466AC5;">Sign Up</button></center>
                </div>
                <div class="text-center" style="margin: 5px; margin-bottom:15px;">
                    Sudah memiliki akun? <a href="{{('/uangku')}}">Sign in</a>
                </div>
            </div>
        </div>
    </form>
        </div>
        </div>
        </center>
    </body>
</html>