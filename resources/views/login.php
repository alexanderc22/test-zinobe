<!DOCTYPE html>
<html lang="es">
	<head>
        <meta charset="utf-8" />
		<title>Test Zibone</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        
                
	</head>
    <body>
        
    <div class="container">
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