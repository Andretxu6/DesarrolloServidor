<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
       <h1>Hola mundo!!</h1>
	<form action="/formularioPostAnswer" method="POST">
		{!! csrf_field() !!}
		<label>Nombre:</label>
		<input type="text" name="name" />
		<br/>		
		<label>Apellido:</label>
		<input type="text" name="apellido" />
		<br/>
		<label>Edad:</label>
		<input type="number" name="edad" />
		<br/>
		<input type="submit" value="enviar"/>
	</form>
    </body>
</html>
