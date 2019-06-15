<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>log in- Register Forms</title>

    <style>
        body{
            background-color: #525252;
        }
        .form-group{
            margin-top: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        input.btn{
            margin-top: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .centered-form{
            margin-top: 60px;
        }

        .centered-form .panel{
            background: rgba(255, 255, 255, 0.8);
            box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
        }
    </style>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>

    <div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <div class="panel panel-primary " style="">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align: center">Codelgniter Kayıt Formu <small>It's free!</small></h3>
                </div>
                <div class="panel-body">
                    <form role="form">

                        <div class="form-group">
                            <input type="text" name="full_name" id="first_name" class="form-control input-md " placeholder="Full Name">
                        </div>



                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-md " placeholder="Email Address">
                        </div>


                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-md" placeholder="Password">
                        </div>
                        <div class="form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-md  " placeholder="Confirm Password">
                            </div>


                        <input type="submit" value="Register" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

