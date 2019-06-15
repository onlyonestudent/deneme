<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 13.06.2019
 * Time: 02:02
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ansayfa</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Ayarlar <span class="sr-only">(current)</span></a></li>


            </ul>
            <form action="<?php echo base_url('kullanici/cikis_yap'); ?>" class="navbar-form navbar-right">
                <button type="submit" class="btn btn-primary">Çıkış</button>

            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

    <div class="container">
        <div class="col-lg-6 well col-lg-offset-3">
            <div class="row center-block">
                <div class="col-md-6">
                    <div class="thumbnail center-block col-lg-offset-2">
                        <img src="<?php echo base_url('assets/pp.jpg'); ?>" alt="...">
                        <div class="caption">
                            <h3>Hoşgeldiniz</h3>

                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto, asperiores id in, iure magni minus modi possimus quaerat quia quibusdam quo reiciendis temporibus voluptas voluptates. Asperiores laboriosam natus voluptatibus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>




