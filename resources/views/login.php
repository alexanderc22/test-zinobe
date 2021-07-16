<!DOCTYPE html>
<html lang="es">
	<head>
    <meta charset="utf-8" />
		<title>Test Zibone</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="public/assets/style.css" />
    <script src="public/assets/ini.js"></script>          
	</head>
  <body>
        
    <div class="container">
      <div class="form">
      
          <ul class="tab-group">
            <li class="tab active"><a href="#signup">Sign Up</a></li>
            <li class="tab"><a href="#login">Log In</a></li>
          </ul>
            
          <div class="tab-content">
            <div id="signup">   
              <h1>Sign Up for Free</h1>
              
              <form action="/" method="post">
              
                <div class="top-row">
                  <div class="field-wrap">
                    <label>
                      First Name<span class="req">*</span>
                    </label>
                    <input type="text" required autocomplete="off" />
                  </div>
              
                  <div class="field-wrap">
                    <label>
                      Last Name<span class="req">*</span>
                    </label>
                    <input type="text"required autocomplete="off"/>
                  </div>
                </div>

                <div class="field-wrap">
                  <label>
                    Email Address<span class="req">*</span>
                  </label>
                  <input type="email"required autocomplete="off"/>
                </div>
                
                <div class="field-wrap">
                  <label>
                    Set A Password<span class="req">*</span>
                  </label>
                  <input type="password"required autocomplete="off"/>
                </div>                
                <button type="submit" class="button button-block"/>Get Started</button>
              
              </form>

            </div>
            
            <div id="login">   
              <h1>Welcome Back!</h1>
              
              <form action="/" method="post">
              
                <div class="field-wrap">
                <label>
                  Email Address<span class="req">*</span>
                </label>
                <input type="email"required autocomplete="off"/>
              </div>
              
              <div class="field-wrap">
                <label>
                  Password<span class="req">*</span>
                </label>
                <input type="password"required autocomplete="off"/>
              </div>
              
              <p class="forgot"><a href="#">Forgot Password?</a></p>
              
              <button class="button button-block"/>Log In</button>
              
              </form>

            </div>
            
          </div><!-- tab-content -->
            
      </div> <!-- /form -->
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