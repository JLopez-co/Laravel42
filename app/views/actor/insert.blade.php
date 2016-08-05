<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        {{HTML::style('css/boostrap.css')}}

        <title>ciudades</title>
    </head>
    <body class="col-md-12">
      <section class="col-md-12">
        <article class="col-md-4 col-md-offset-3">
          <center> <label font-size: large >Insertar actor</label> </center>
     {{Form::open([ "class" => "form-horizontal"])}}
          {{Form::text("nombre",
                       null,
                        ["placeholder"=>"Ingresa tu nombre",
                        "id"=>"nombre",
                        "class"=>"col-md-12"]
          )}}
          {{Form::text("apellido",
                        null,
                        ["placeholder"=>"Ingresa tu apellido",
                        "id"=>"apellido",
                        "class"=>"col-md-12"]
          )}}
          {{Form::submit("Ingresa datos",
                        ["class"=>"btn btn-block"])
          }}

     {{Form::close()}}

        </article>
          </section>
    </body>
</html>
