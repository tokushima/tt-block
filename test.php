<?php
include('vendor/autoload.php');

$coin = new \tt\block\Blockchain();
$coin->addBlock(new \tt\block\Block(1, '2019/01/02', ['amount'=>10]));
$coin->addBlock(new \tt\block\Block(2, '2019/01/03', ['amount'=>100]));
$coin->addBlock(new \tt\block\Block(3, '2019/01/04', ['amount'=>1000]));

var_dump($coin);

