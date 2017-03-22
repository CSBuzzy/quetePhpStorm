<?php


$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

foreach ($students as $key=>$value){
    echo $key.$value.'</br>';

}

function Moyenne()
{
    $Nombres = func_get_args();
    $Nb = sizeof($Nombres);
    $Somme = 0;

    foreach ($Nombres as $Valeur)
    {
        $Somme += $Valeur;
    }
    return ($Somme / $Nb);
}
echo Moyenne('42','51','45','48','19');

?>

