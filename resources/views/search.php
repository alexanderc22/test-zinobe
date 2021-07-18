  <body>
        
    <div class="container">
      <div class="form">  
      	<a href="<?php echo URL_HOME; ?>logout">Logout</a>
	    <div class="form-content clearfix">
	        <div class="search" id="login">
	          <h1>Search by..</h1>
	              
	            <form action="<?php echo URL_HOME; ?>find" method="post">
	              	<input type="hidden" name="token" value="<?php echo $token; ?>" >
	                <div class="field-wrap">                
		                <input type="text" required autocomplete="off" name="search" />
		            </div>
	              	                            
	              	<button class="button button-block"/>Send</button>
	              
	            </form>
	        </div>
	    </div>
            
      </div> <!-- /form -->


    </div>

  </body>     
</html>