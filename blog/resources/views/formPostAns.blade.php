<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
    	<h1>Adios!!</h1>
		<?php echo "Hola ".$_POST["name"]." ".$_POST["apellido"]; ?>
		<br/>
		<?php echo "Tienes ".$_POST["edad"]." años"; ?>
    </body>
</html>
