<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        {{HTML::style('css/boostrap.css')}}
      
        <title>Peliculas</title>
    </head>
    <body class="col-md-12">
    <center> <label font-size: large >Lista de peliculas wuays</label> </center>
    <form class="col-md-12">
        
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead >
                    <tr class="active">
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Ranking</th>
                        <th>Caracteristicas especiales</th>
                        <th>Tiempo de duracion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peliculas as $pelicula)                    
                    <tr>
                        <td> {{$pelicula->title}}</td>
                        <td> {{$pelicula->description}}</td>
                        <td> {{$pelicula->rating}}</td>
                        <td> {{$pelicula->Special_features}}</td>
                        <td> {{$pelicula->length}}</td>
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>
    </body>
</html>
