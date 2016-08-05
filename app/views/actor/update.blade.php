<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        {{HTML::style('css/boostrap.css')}}

        <title>ciudades</title>
    </head>
    <body class="col-md-12">
      <section class="col-md-12">

        <article class="col-md-3 col-md-offset-3">
          {{Form::open()}}
          <center> <label font-size: large >Modificar actor</label> </center>

          {{Form::text("nombre",
                       $actor->first_name,
                        ["placeholder"=>"Ingresa tu nombre",
                        "id"=>"nombre",
                        "class"=>"col-md-12"]
          )}}
          {{Form::text("apellido",
                       $actor->last_name,
                        ["placeholder"=>"Ingresa tu apellido",
                        "id"=>"nombre",
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
