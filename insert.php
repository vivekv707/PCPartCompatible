<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div style="display:flex;justify-content:center;">
    <?php
  if(array_key_exists('mname',$_POST)==true){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpudb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
$mname = $_POST["mname"];
$imgsrc = $_POST["imgsrc"];
$bprice = $_POST["bprice"];
$price = $_POST["price"];
$awhere = $_POST["awhere"];
$sql = "INSERT INTO cpu_table(ID, model_name, image_source, base_price, promo_price, avail, avail_where) VALUES (NULL, '".$mname."', '".$imgsrc."', '".$bprice."', '".$price."', '1', '".$awhere."')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  }
?>
<a href="browse.php">Go to CPUS's</a>
</div>
</body>
</html>