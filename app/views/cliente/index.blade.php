<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cliente index</title>
    {{HTML::style('css/boostrap.css')}}
  </head>
    <body>
      <section class="col-md-12">
        <article class="col-md-5 col-md-offset-3">
          <label >Clientes</label>
          {{HTML::link('cliente/insert','Nuevo cliente')}}
          <table class="table table-hover">
             <thead>
              <th>Nombre</th>
              <th>Apellido </th>
              <th>Email</th>
              <th>Estado</th>
              <th>Actualizar</th>
              <th>Eliminar</th>
            </thead>
            <tbody>
              @foreach ($clientes  as $cliente)
                <tr>
                  <td>{{$cliente->first_name}}</td>
                  <td>{{$cliente->last_name}}</td>
                  <td>{{$cliente->email}}</td>
                  @if($cliente->active==1)
                    <td>activo</td>
                   @else
                    <td>Inactivo</td>
                  @endif
                </tr>
              @endforeach
            </tbody>
          </table>
        </article>
        <article class="col-md-offset-3">
          {{$clientes->links()}}
        </article>
      </section>
    </body>
</html>
