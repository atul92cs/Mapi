<?php
 require __DIR__.'/vendor/autoload.php';

 use Kreait\Firebase\Factory;
 use Kreait\Firebase\ServiceAccount;

 $factory=(new factory)->withServiceAccount(__DIR__.'/dbkey.json');
  $database=$factory->createDatabase();
?>