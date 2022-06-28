<?php

function getPrice($db)
{
    $query = 'select * from tovar';
    $result = $db->prepare('select * from tovar');
    $result->execute();
    return $result->fetchAll(PDO::FETCH_ASSOC);
}