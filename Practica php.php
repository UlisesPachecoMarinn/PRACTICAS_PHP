<?php
$_SERVER = 'localhost';
$usuariop = 'root';
$passwordp =" ";
$BD = 'Ejemplo';
$conector= mysqliconect(
    $_SERVER , $usuariop, $passwordp,$BD
);
if($conector  -> mysqli.error ){
    die "error alaq conectar BD "->mysqi.error
}
?>
<?php
$usuariop ="Ulises";
$passwordp ="6766";
$user ="   "$_POST ['usuario'];
$pass ="  " $_POST ['password'];
if($user=" " and $pass==" "){
    echo "los campos estan vacios";
}
else {
    if($usuariop==$user and $passwordp==$pass){
        echo "bienvenido".$user;
    }
}
else{
    echo "datos no conectados";
    $contador ++;
    if ($contador>3){
        echo "Acceso denegado"
    }
};
?>