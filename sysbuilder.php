<!DOCTYPE html>
<html lang='en'>
<meta charset='UTF-8'>
<title>PC Compatability</title>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='style.css'>
<link rel='stylesheet' href='modalstyle.css'>
<style>.footercopy{
    font-size:1.2em;
    text-align: center;
}
.modelname{
    width:20%;
}

</style>
<script src='script.js' defer></script>
<script src='sysBuild.js' defer></script>
<body>
  <header><div class='headertop'><div class='logo'><a href='index.html'><img src='pcpp-logo.svg'></a></div>
<div class='navigate'>
    <ul>
        <li><a href='login.html'>Login</a></li>
        <li><a href='register.html'>Register</a></li>
    </ul>
</div>
</div>
<div class='headerbottom'> 
    <div class='bottomnav'>
        <a href='#' class='navbuttons'><svg class='navicon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><g data-name='Layer 2'><path d='M23.85 7.87a6.39 6.39 0 0 1-1.79 3.31 6.54 6.54 0 0 1-6.93 1.5L4.58 23.22a2.57 2.57 0 0 1-1.89.78 2.64 2.64 0 0 1-1.91-.78 2.68 2.68 0 0 1-.78-1.9 2.71 2.71 0 0 1 .78-1.9L11.32 8.87a6.54 6.54 0 0 1 1.5-6.93A6.39 6.39 0 0 1 16.13.15a6.12 6.12 0 0 1 3.63.29l-4.1 4.1.4 3.4 3.4.4 4.1-4.1a6.12 6.12 0 0 1 .29 3.63z' data-name='Layer 1'></path></g></svg>System Builder </a>
        <a href='buildguides.php' class='navbuttons'><svg class='navicon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18 24'><g data-name='Layer 2'><path d='M12 0H0v24h18V6zm4 22H2v-2h3v-1H2v-2h5v-1H2v-2h3v-1H2v-2h5v-1H2V8h3V7H2V5h5V4H2V2h9v5h5z' data-name='Layer 1'></path></g></svg>Build Guides </a>
        <a href='#' class='navbuttons'><svg class='navicon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><g data-name='Layer 2'><g data-name='Layer 1'><path d='M8 8h8v8H8z'></path><path d='M24 9V7h-2V4a2 2 0 0 0-2-2h-3V0h-2v2h-2V0h-2v2H9V0H7v2H4a2 2 0 0 0-2 2v3H0v2h2v2H0v2h2v2H0v2h2v3a2 2 0 0 0 2 2h3v2h2v-2h2v2h2v-2h2v2h2v-2h3a2 2 0 0 0 2-2v-3h2v-2h-2v-2h2v-2h-2V9zm-4 11H4V4h16z'></path></g></g></svg>Browse Products </a>
    </div>
    
</div>
</header>
<main>
<!-- The Modal -->
<div id='CpuSelectionModal' class='modal'>

  <!-- Modal content -->
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <h3>Choose a CPU</h3>
    <div class='cpuSelection'>
    <table class='systable'>
        <thead><tr>
            <th>Model Name</th>
            <th>Product Image</th>
            <th>Base Price</th>
            <th>Promo Price</th>
            <th>Availability</th>
            <th>Where</th>
            <th>Select?</th>
            </tr></thead>
            
            <?php
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

$sql = "SELECT ID, model_name, image_source, base_price, promo_price, avail, avail_where FROM cpu_table";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "
    <tr class='selection-item'>

    <td class='modelname'>".$row["model_name"]."</td>
    <td><img src='product_images/".$row["image_source"]."' class='cpu_image'></td>
    <td> ".$row["base_price"]." </td>
    <td> ".$row["promo_price"]."</td>
    <td> Yes</td>
    <td><a href='".$row["avail_where"]."' target='_blank'>Amazon</a></td>
    <td><input type='button' id='cpu-item' data-id='".$row["ID"]."' value='Select'></input>
  </tr>
        ";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
        </table>
    </div>
    </div>
  </div>

</div>
    <div class='sysbuildwrapper'>
        <div class='sysbuilderhead'>
                <h3>System Builder</h3>
        </div>
        <div class='sysbuildermeta'>
            <div class='compatibility'>Compatablilty: </div>
            <div class='wattage'>Estimated Wattage: 0</div>
        </div>
        <div class='sysbuild'>
            <table class='systable'>
                <thead><tr>
                    <th>Component</th>
                    <th>Selection</th>
                    <th>Base Price</th>
                    <th>Promo Price</th>
                    <th>Availability</th>
                    <th>Where</th>
                    </tr></thead>
                
                <tr>
                  <td><a href='#'>CPU</a></td>
                  <td><button class='button' id='OpenCpuModal'><span>Choose A CPU </span></button></td>
                  <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
                  
                </tr>
                <tr>
                    <td><a href='#'>CPU Cooler</a></td>
                 <td><button class='button' ><span>Choose A CPU Cooler</span></button></td>
                 <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
               </tr>
               <tr>
                <td><a href='#'>Motherboard</a></td>
                 <td><button class='button' ><span>Choose A Motherboard</span></button></td>
                 <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
               </tr>
               <tr>
                <td><a href='#'>Memory</a></td>
                 <td><button class='button' ><span>Choose A Memory</span></button></td>
                 <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
               </tr>
               <tr>
                <td><a href='#'>Storage</a></td>
                 <td><button class='button' ><span>Choose A Storage</span></button></td>
                 <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
               </tr>
               <tr>
                <td><a href='#'>Video Card</a></td>
                 <td><button class='button' ><span>Choose A Video Card</span></button></td>
                 <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
               </tr>
               <tr>
                <td><a href='#'>Case</a></td>
                 <td><button class='button' ><span>Choose A Case</span></button></td>
                 <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
               </tr>

               <tr>
                <td><a href='#'>Power Supply</a></td>
                 <td><button class='button' ><span>Choose A Power Supply</span></button></td>
                 <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
               </tr>
               <tr>
                <td><a href='#'>Operating System</a></td>
                 <td><button class='button' ><span>Choose A Operating System</span></button></td>
                 <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
               </tr>
               <tr>
                <td><a href='#'>Monitor</a></td>
                 <td><button class='button' ><span>Choose A Monitor</span></button></td>
                 <td> </td>
                  <td></td>
                  <td> </td>
                  <td></td>
               </tr>
              </table> 
              <div class='costdetails'>
                  Total: <span id='total'>0$</span>
              </div>
        </div>
    </div>
</main>

<footer style='    background-color: black;
padding: 2em;'>
    <div class='footerdetails'>
        <nav><ul class='footerlinks unstyled-list'>
            <li><a href='#'>Home</a></li>
            <li><a href='#'>System Builder</a></li>
            <li><a href='#'>Products</a></li>
        </ul></nav>
        <h3 class='footercopy'>&copy; Copyright 2022 PCPartsCompatability</h3>
    </div>
</footer>
</body>
</html>