<!DOCTYPE html>
<html lang="es">
	<head>
        <meta charset="utf-8" />
		<title>Test Zibone</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        
                
	</head>
    <body>
        
    <div class="container">
        <div class="container">
            <div class="login-page clearfix">
              <?php if(!$userInfo): ?>
              <div class="login-box auth0-box before">
                <h3>Auth0 Example</h3>
                <p>Zero friction identity infrastructure, built for developers</p>
                <a class="btn btn-primary btn-lg btn-login btn-block" href="login.php">Sign In</a>
              </div>
              <?php else: ?>
              <div class="logged-in-box auth0-box logged-in">
                <h1 id="logo"><img src="//cdn.auth0.com/samples/auth0_logo_final_blue_RGB.png" /></h1>
                <img class="avatar" src="<?php echo $userInfo['picture'] ?>"/>
                <h2>Welcome <span class="nickname"><?php echo $userInfo['nickname'] ?></span></h2>
                <a class="btn btn-warning btn-logout" href="/logout.php">Logout</a>
              </div>
              <?php endif ?>
            </div>
        </div>
    	<div class="row">
            <div class="col-xs-12">
                <h1>Listado Usuarios</h1>              
                <?php 
                	foreach ($usuarios as $k => $product) {
                		echo $product->nombre;
                	}
                ?>
            </div>    
        </div>
    </div>

    </body>
</html>