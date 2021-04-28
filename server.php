<?php

require __DIR__ .'/partials/template/database.php';

header('Content-Type: application/json');

echo json_encode($database);



?>