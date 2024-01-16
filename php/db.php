 <?php
define('HOST','localhost');
define('DB_NAME','dorian');
define('USER','root');
define('PASS','');

try{
    $db = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,USER,PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $tz = (new DateTime('now', new DateTimeZone('Europe/Paris')))->format('P');
    $db->exec("SET time_zone='$tz';");
}catch(PDOException $e){
    echo $e;
}
?>
