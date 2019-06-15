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
    <title>Kullanıcı Giriş-Çıkış</title>
    <link rel="stylesheet" href="<?php echo base_url('assets//css/bootstrap.min.css'); ?>">
</head>
<body>
    <h3 class="text-center"> Giriş</h3><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 well col-lg-offset-3">
                <form action="<?php echo base_url('giris-yap'); ?>">
                    <div class="form-group">
                        <label >Email address</label>
                        <input type="email"  name="eposta" class="form-control", placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" class="form-control" name="sifre" placeholder="Password">
                    </div>

                    <button type="submit" class="btn  btn-primary btn-block">Giriş</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>




