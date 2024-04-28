<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../../includes/_functions.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" class="form-control">
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="correo" class="form-label">Correo electronico *</label>
<input type="email"  id="correo" name="correo" class="form-control">
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="password" class="form-label">Password *</label>
<input type="password"  id="password" name="password" class="form-control">
</div>
</div>
</div>

<div class="mb-3">
<label for="telefono" class="form-label">Telefono *</label>
<input type="tel"  id="telefono" name="telefono" class="form-control">
<input type="hidden" name="accion" value="insertar_usuarios">
</div>

<div class="mb-3">   
    <img src="img/user.png" alt="avatar" id="img" />
          <input type="file" class="form-control-file" name="imagen" id="imagen" required>
          <div class="contenedor_cambiarfoto">
              <label class="label_foto" for="imagen">Cambiar foto</label>
          </div>
          <!-------------IMAGEN MAPA----------------->
                                
            <script type="text/javascript">
                                   
                var defaultFile = 'img/user.png';

                let file = document.getElementById( 'imagen' );
                let img = document.getElementById( 'img' );
       
                file.addEventListener( 'change', e => {
                    if( e.target.files[0] ){
                        const reader = new FileReader( );
                        reader.onload = function( e ){
                            img.src = e.target.result;
                        }
                        reader.readAsDataURL(e.target.files[0])
                    }else{
                        img.src = defaultFile;
                    }
                } );
            </script>
</div>
<div class="mb-3">
<input type="hidden" name="accion" value="insertar_user">
<button type="submit" class="btn btn-success">Guardar</button>


</div>

</form>
</div>
</div>
</body>
</html>