<?php
$sc= array ('Rio do Sul','Blumenal','Joinville');
$rs= array ('Porto Alegre','Samta Rpsa','Caxias do Sul');
$pr= array ('Curitiba','pato branco','Londrina');
echo '
<table border = "1">
    <tr>
        <th>SC</th>
        <th>';
        echo $sc[0];
        echo '
        </th>
        <th>';
        echo $sc[1];
        echo '
        </th>
        <th>';
        echo $sc[2];
        echo '
        </th>
    <tr>
        <th>RS</th>
        <th>';
        echo $rs[0];
        echo '
        </th>
        <th>';
        echo $rs[1];
        echo '
        </th>
        <th>';
        echo $rs[2];
        echo '
        </th>
    <tr>
        <th>PR</th>
        <th>';
        echo $pr[0];
        echo '
        </th>
        <th>';
        echo $pr[1];
        echo '
        </th>
        <th>';
        echo $pr[2];
        echo '
        </th>
</table>
';