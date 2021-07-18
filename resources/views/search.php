  <body>
        
    <div class="container">
      <div class="form">  
      	<a href="<?php echo URL_HOME; ?>logout/<?php echo $token; ?>">Logout</a>
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
      	<?php if($consultas) { ?>
	      	<div class="list-search"> 
	      		<table class="table">
				  <thead class="thead-light">
				    <tr>
				      <th scope="col">Document</th>
				      <th scope="col">Job</th>
				      <th scope="col">Email</th>
				      <th scope="col">Name</th>
				      <th scope="col">Last Name</th>
				      <th scope="col">Phone Number</th>
				      <th scope="col">Country</th>
				      <th scope="col">State</th>
				      <th scope="col">City</th>
				      <th scope="col">Birth Day</th>
				    </tr>
				  </thead>
				  <tbody>
	      			<?php foreach ($consultas as $value)  { ?>
				    <tr>
				      <th scope="row"><?php echo $value->document; ?></th>
				      <td><?php echo $value->job_title; ?></td>
				      <td><?php echo $value->email; ?></td>
				      <td><?php echo $value->first_name; ?></td>
				      <td><?php echo $value->last_name; ?></td>
				      <td><?php echo $value->phone_number; ?></td>
				      <td><?php echo $value->country; ?></td>
				      <td><?php echo $value->state; ?></td>
				      <td><?php echo $value->city; ?></td>
				      <td><?php echo ($value->date_birth)?$value->date_birth:'-'; ?></td>
				    </tr>
					<?php } ?>			
				  </tbody>
				</table>			      	
			</div>
	<?php } ?>
    </div>

  </body>     
</html>