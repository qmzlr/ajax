<?php
$date = [
   "title"=>$_POST["title"],
   "content"=>$_POST["content"]
];

$connect = new PDO("mysql:host=localhost;dbname=ajax", "root", "");
$sql = 'INSERT INTO `posts` (title, content) VALUES (:title, :content)';
$stmt = $connect->prepare($sql);
$result = $stmt->execute($date);