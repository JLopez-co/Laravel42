<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        {{HTML::style('css/boostrap.css')}}
        <title>ciudades</title>
    </head>
    <body class="col-md-12">
      <section class="col-md-12">
        <article class="col-md-5 col-md-offset-3">
          <center> <label font-size: large >Consulta de actor</label> </center>
          <table class="table table-hover">
            <thead>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Actualizar</th>
            </thead>
            <tbody>
              @foreach ($actores  as $tabla)
                <tr>
                  <td>{{$tabla->first_name}}</td>
                  <td>{{$tabla->last_name}}</td>
                  <td>
                    {{HTML::link("actore/update/$tabla->actor_id","Actualizar")}}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </article>
        <article class="col-md-8 col-md-offset-3">
          {{$actores->links()}}
        </article>
      </section>
    </body>
</html>
