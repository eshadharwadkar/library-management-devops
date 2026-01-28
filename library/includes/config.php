<?php 
define('DB_HOST','host.docker.internal');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','library');

try {
    $dbh = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME,
        DB_USER,
        DB_PASS,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
}
catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
