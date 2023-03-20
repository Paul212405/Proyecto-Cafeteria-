<?php
//Variable para guardar la consulta de paginacion
$sqlpag = "select count(*) as total from tb_producto";
//Capturando el dato categoria si llega y filtra en caso llegue
if ($_GET['c'] != 0) {
    $c= $_GET['c'];
    $categoria = $c;
    $sql = "SELECT id_producto,nombre,precio,stock,id_categoria FROM tb_producto WHERE id_categoria=$categoria";
    $sqlpag = $sqlpag . " WHERE id_categoria=$categoria";
} else {
    $sql = "SELECT id_producto,nombre,precio,stock,id_categoria FROM tb_producto";
    $c = 0;
}
//Para ordenar 
if (isset($_GET['o'])) {
    $o = $_GET['o'];
    switch ($o) {
        case 1:
            $sql = $sql . " ORDER BY precio ASC";
            break;
        case 2:
            $sql = $sql . " ORDER BY precio DESC";
            break;
        case 4:
            $sql = $sql . " ORDER BY stock ASC";
            break;
        case 5:
            $sql = $sql . " ORDER BY id_producto DESC";
    }
}else{
    $o = 0;
}
//Para la paginacion
if (isset($_GET['limite'])) {
    $limi = $_GET['limite'];
    $sql = $sql . " limit $limi,5";
} else {
    $sql = $sql . " limit 0,5";
}
//Despues de la comprobacion de todos los filtros recien se ejecuta la consulta
$result = $con->query($sql);