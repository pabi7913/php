<?php

require __DIR__. '/part/__connect_db.php';

$stmt = $pdo->query('SELECT * FROM address_book');

// $row = $stmt->fetchAll();
// echo json_encode($row, JSON_UNESCAPED_UNICODE);

while($row=$stmt->fetch()){
    echo "{$row['sid']} {$row['name']} <br>";}
