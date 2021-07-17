<!DOCTYPE html>
<html lang="es">
	<head>
    <meta charset="utf-8" />
		<title>Test Zibone</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="public/assets/style.css" />
    <script src="public/assets/ini.js"></script>       
	</head>
  <body>
        
    <div class="container">
      <div class="form">  

      <ul  class="nav nav-pills">
        <li class="tab active" >
          <a  href="#signup" data-toggle="tab">Sign Up</a>
        </li>
        <li class="tab" >
          <a href="#login" data-toggle="tab">Log In</a>
        </li>
      </ul>
      <div class="tab-content clearfix">
        <div class="tab-pane active" id="signup">
          <br>
          <h1>New User</h1>
              
              <form action="<?php echo $_SERVER['REQUEST_URI']; ?>register" method="post">
              
                <div class="top-row">
                  <div class="field-wrap">                    
                    <input type="text" required autocomplete="off" name="name"  placeholder="Name *"/>
                  </div>
              
                  <div class="field-wrap">                    
                    <input type="text"required autocomplete="off" name="document" placeholder="Document *" />
                  </div>
                </div>

                 <div class="field-wrap">
                      <select class="form-control" id="exampleFormControlSelect1" name="countrie" >
                          <option value="<?php echo $countrie['alpha2Code']; ?>" > Select Countrie <span class="req">*</span></option>
                          <?php 
                            
                            foreach ($arrayCountries as $kc => $countrie) {
                              ?>
                              <option value="<?php echo $countrie['name'].'-'.$countrie['alpha2Code']; ?>" ><?php echo $countrie['name'].'  '.$countrie['alpha2Code']; ?></option>
                              <?php                        
                            }
                          ?> 
                      </select>
                  </div>

                <div class="field-wrap">                  
                  <input type="email"required autocomplete="off" name="email" placeholder="Email *"/>
                </div>
                
                <div class="field-wrap">                  
                  <input type="password"required autocomplete="off" name="password" placeholder="Password *"/>
                </div>                
                <button type="submit" class="button button-block"/>Get Started</button>
              
              </form>
        </div>
        <div class="tab-pane" id="login">
          <h1>Log In!</h1>
              
              <form action="<?php echo $_SERVER['REQUEST_URI']; ?>search" method="post">
              
                <div class="field-wrap">                
                <input type="email"required autocomplete="off" name="email" placeholder="Email *"/>
              </div>
              
              <div class="field-wrap">                
                <input type="password"required autocomplete="off" name="password" placeholder="Password *"/>
              </div>
                            
              <button class="button button-block"/>Log In</button>
              
              </form>
        </div>
      </div> 
            
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