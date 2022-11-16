<?php
$joinville= array ('2','5','4');
$chapecoense= array ('1','9','6');
$figuerense= array ('3','3','0');
$avai= array ('4','1','-2');
echo '
<table border = "1">
    <tr>
        <th>Time</th>
        <th> Posição </th>
        <th> Pontos </th>
        <th> Saldo de gols </th>
    <tr>
        <th>Joinville</th>
        <th>';
        echo $joinville[0];
        echo '
        </th>
        <th>';
        echo $joinville[1];
        echo '
        </th>
        <th>';
        echo $joinville[2];
        echo '
        </th>
    <tr>
        <th>Chapecoense</th>
        <th>';
        echo $chapecoense[0];
        echo '
        </th>
        <th>';
        echo $chapecoense[1];
        echo '
        </th>
        <th>';
        echo $chapecoense[2];
        echo '
        </th>
    <tr>
        <th>Figuerense</th>
        <th>';
        echo $figuerense[0];
        echo '
        </th>
        <th>';
        echo $figuerense[1];
        echo '
        </th>
        <th>';
        echo $figuerense[2];
        echo '
        </th>
    <tr>
        <th>Avaí</th>
        <th>';
        echo $avai[0];
        echo '
        </th>
        <th>';
        echo $avai[1];
        echo '
        </th>
        <th>';
        echo $avai[2];
        echo '
        </th>
</table>
';