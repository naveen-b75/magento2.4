<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$csvfile=fopen('/var/www/html/magento24/var/products.csv','r');

$header=fgetcsv($csvfile);

$data=array();
while ($row=fgetcsv($csvfile,9000,",")){
    $data_count=count($row);
    $data[]=array_combine($header,$row);
}

