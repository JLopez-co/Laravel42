<!DOCTYPE html>
<html>
    <head>
        {{HTML::style('css/boostrap.css')}}
        <meta charset="UTF-8">
        <title>Actores</title>
        
    </head>
    <body>
        <h1>Lista de actores</h1>

        <table class=" ">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actores as $actor)                    
                <tr>
                   
                    <td> {{$actor->first_name}}</td>
                    <td> {{$actor->last_name}}</td>
                </tr>
                @endforeach;                    
            </tbody>
        </table>

    </body>
</html>
