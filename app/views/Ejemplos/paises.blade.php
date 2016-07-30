<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paises</title>
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;}
            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
            .tg .tg-qiyl{font-family:"Times New Roman", Times, serif !important;;background-color:#5BA072;color:#343434;vertical-align:bottom}
            .tg .tg-3fsd{font-family:"Times New Roman", Times, serif !important;;background-color:#34ff34;color:#343434;vertical-align:top}
            .tg .tg-yw4l{vertical-align:top}
        </style>
    </head>
    <body>
        <h1>Lista de paises...</h1>
        <table class="tg">
            <thead>
                <tr>
                    <th class="tg-qiyl" >Paises</th>
                    <th class="tg-qiyl"> Capital</th>
                    <th class="tg-qiyl">Vacaciones</th>
                    <th class="tg-qiyl">Moneda</th> 
                    <th class="tg-qiyl">Población</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paises as $Pais => $Clasificacion)
                <tr>
                    <td class="tg-yw4l">{{$Pais}}</td>  
                    
                    @foreach ($Clasificacion as $dato => $valor)
                    <td class="tg-yw4l">{{$valor}} </td>  
                    @endforeach 
                </tr>
                @endforeach
            </tbody>
        </table>           
    </body>
</html>
