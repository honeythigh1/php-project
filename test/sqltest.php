<?php

$host = 'localhost';
$user = 'dbsguswns';
$pw = 'dbsguswns';
$dbName = 'testdb';
$mysqli = new mysqli($host, $user, $pw, $dbName);

if ($mysqli) {
    echo "성공";
}else{
    echo "실패";
}

echo "수정 하였음";
echo "test 브랜치에서 수정";
?>