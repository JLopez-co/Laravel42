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
                  <?php $var = 0; ?>
                     @foreach ($paises as $paisea)
                      <tr>
                          <?php
                          var_dump($paisea->pais [$var+1]);

                            if($paisea->pais == $paisea->pais [$var+1] ){

                            }?>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
