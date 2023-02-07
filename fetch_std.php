<?php

include 'model.php';

$modal = new Model();

$rows = $modal->fetch_std();

echo json_encode($rows);


?>