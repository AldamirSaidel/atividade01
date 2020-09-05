<?php
$link = new mysqli('localhost', 'root', '', '');
$link -> set_charset('utf8');
if ($link)
{
    echo " Deu certo OK";
}
else{
    die ('Errado( '. mysqli_connect_errno() .' )' . mysqli_connect_errno());

}

$nomeConsulta = "Consulta";

$query_create_schema = "CREATE SCHEMA IF NOT EXISTS $nomeConsulta"

or die ("Error in the consult .. " . $link -> connection_error);
$result_create_schema =( $link->$query_create_schema);

if($link->query($query_create_schema) === TRUE)
{
    echo " criou banco de dados ";
}
else
{
    echo "não criou";
}
?>