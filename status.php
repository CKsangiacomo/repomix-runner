<?php
header('Content-Type: application/json');
$f=__DIR__.'/CKgit/CKgitstatus.txt';
echo json_encode([
  'ok'=>file_exists($f),
  'url'=>'https://repomix.consavari.com/CKgit/CKgitstatus.txt',
  'size_bytes'=>file_exists($f)?filesize($f):null,
  'updated_at'=>file_exists($f)?gmdate('c', filemtime($f)):null,
]);
