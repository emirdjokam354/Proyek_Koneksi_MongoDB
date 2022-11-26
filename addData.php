<?php 

$manager = new MongoDB\Driver\Manager("mongodb+srv://adminlocalhost:admin12345@clusteremir.nvjnvno.mongodb.net/?retryWrites=true&w=majority");

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['borough' => 'b', 'name' => 'amik', 'restaurant_id' => 'amik']);

$manager->executeBulkWrite('sample_restaurants.restaurants', $bulk);

// Query Class
$query = new MongoDB\Driver\Query(array('restaurant_id' => 'amik'));

// Pilih DB dan Collection
$cursor = $manager->executeQuery('sample_restaurants.restaurants', $query);

// Convert cursor to Array and print result
echo "<pre>";

print_r($cursor->toArray());
echo "</pre>";

?>