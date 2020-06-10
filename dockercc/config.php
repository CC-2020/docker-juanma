<?php

/**
 * Configuration for database connection
 *
 */

$host       = "mysql-server-80";
$username   = "root";
$password   = "root";
$dbname     = "my_db";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
