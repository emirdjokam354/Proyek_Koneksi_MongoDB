<?php 

$manager = new MongoDB\Driver\Manager("mongodb+srv://adminlocalhost:admin12345@clusteremir.nvjnvno.mongodb.net/?retryWrites=true&w=majority");

// query Class
$query = new MongoDB\Driver\Query(array("restaurant_id" => "40356018"));

// pilih DB dan Collection
$cursor = $manager->executeQuery('sample_restaurants.restaurants', $query);

// convert cursor to Array and print result

echo "<pre>";
print_r($cursor->toArray());

echo "</pre>";

?>