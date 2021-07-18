
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
              
              <form action="<?php echo URL_HOME; ?>register" method="post">
              <?php if($error) { ?>
                <div class="invalid-feedback" style="display: block;" >
                  <?php echo $error; ?>    
                </div>
              <?php } ?>
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
              
              <form action="<?php echo URL_HOME; ?>search" method="post">
              
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
    </div>

  </body>     
</html>