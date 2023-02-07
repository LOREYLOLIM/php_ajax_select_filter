<?php

include 'model.php';

$modal = new Model();

$rows = $modal->fetch_res();

echo json_encode($rows);


?>