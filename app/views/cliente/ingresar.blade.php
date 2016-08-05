<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nuevo cliente</title>
  </head>
  <body>
    {{Form::open(array("class" => "form-horizontal"))}}

        <div class="form-group">
          <label class="col-md-4 control-label" for="nombre">Nombre:</label>
          <div class="">
            <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="apellido">Apellido:</label>
          <div class="">
            <input type="text" name="apellido" id="apellido" placeholder="Ingresa tu apellido" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Email">Email:</label>
          <div class="">
            <input type="Email" name="Email" id="Email" placeholder="Ingresa tu Email" value="">
          </div>
        </div>
        <label for="activo">Activo?</label>
          <input type="checkbox" name="activo"  id="activo" value="0">
         {{Form::submit("Ingresa datos",
                       ["class"=>"btn btn-block"])
         }}
    {{Form::close()}}
  </body>
</html>
