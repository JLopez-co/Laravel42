<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        {{HTML::style('css/boostrap.css')}}

        <title>ciudades</title>
    </head>
    <body class="col-md-12">
    <center> <label font-size: large >Lista de ciudades de cada pais</label> </center>
    <form class="col-md-12">

        <div class="col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead >
                    <tr class="active">
                        <th>Pais</th>
                        <th>ciudad</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $paisUno = $ciudades[0]->pais ?>
                    @foreach ($paises as $paisea)                    
                        @if($paisea->pais !== $paisUno)
                        <tr>
                            <th> {{$ciudad->pais}}</th>
                            <td></td>
                          <?php $paisUno ?> 
                        </tr>
                        @endif
                    @endforeach    
                </tbody>
            </table>
        </div>
    </body>
</html>
