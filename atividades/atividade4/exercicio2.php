<?php
$carroA='R$15.000';
$carroB='R$20.000';
$carroC='R$25.000';
echo '
<table border = "1px">
    <tr>
        <th>CARRO</th>
        <th> VALOR </th>

    <tr>
        <th>gol-2010</th>
        <th>';
        echo $carroA;
        echo '
        </th>
    </tr>
    <tr>
        <th>palio-2013</th>
        <th>';
        echo $carroB;
        echo '</th>
    </tr>
    <tr>
        <th>fiesta-2014</th>
        <th>';
        echo $carroC;
        echo '</th>
    </tr>
</table>
';