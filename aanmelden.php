<?PHP 

$host = '127.0.0.1';
$db   = 'vragen';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$username = $_GET['username'];
$password = $_GET['password'];
$con=mysqli_connect("mysql","database_user","database_password","vragen");
 if (mysqli_connect_error())
 {
     echo "failed to connect to MySQL: " . mysqli_connect_error();
 }

 $qz = "SELECT id FROM memebers where username='".$username."' and password='".$password."'";
 $qz = str_replace("\'", "",$qz);
 $result = mysqli_query($con,$qz);
 while($row = mysqli_fetch_array($result))
 {
     echo $row['id'];
 }
 mysqli_close($con);

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="nav">
    <ul class="navi">
        <li class="nav"> <a href="index.php" title="terug">terug</a></li>
        <li class="nav"> <a href="inlog.php" title="naar het inlog scherm">inlog</a></li>
    </ul>
</div>

<h1>welkom op de aanmeldings pagina</h1>
    
<form action="inlog.php" method="GET" name="form">
    <input type="text" title="username" name="username">
    <input type="text" name="password">
    <input type="submit" name="submit">
</form>

</body>
</html>