
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" >
        <title>Inicio</title>
        <link rel="stylesheet" href="<?=puta_vos?>assets/css/estilo.css">
    </head>
    
    <body><div class="login-wrap">
    
        
	<div class="login-html">
		
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Empresa</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Cliente</label>
		<div class="login-form">
			<div class="sign-in-htm">
			<form action="<?=puta_vos?>usuario/login" method="post" >
		
				<div class="group">
					<label for="user" class="label">email</label>
					<input id="user" type="text" class="input"  name="usuario">
				</div>
				<div class="group">
					<label for="pass" class="label" >Contraseña</label>
					<input id="pass" type="password" class="input" data-type="password" name="clave">
				</div>
				<div class="group">
					<input type="submit" class="button" value="ENTRAR">
				</div>
				
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">¿Olvido su contraseña?</a>
				</div>
				</form>
			</div>
			<div class="sign-up-htm">
				<div class="group">
                    
					<label for="user" class="label">Numero de CUIT</label>
					<input id="number" type="text" class="input">
				</div>
				
				

				<div class="group">
					<a href="vistas/vista-cliente.php"><input type="button" class="button" value="ENTRAR"></a>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">¿Olvido su contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
