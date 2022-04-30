<!DOCTYPE html>
<html lang='en'>
<meta charset='UTF-8'>
<title>PC Compatability</title>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='style.css'>
<style>.footercopy{
    font-size:1.2em;
    text-align: center;
}</style>

<script>
    function validateBuildSubmission(){
      console.log('i run')
      let x = document.forms['buildform']['buildname'].value;
      if(x==''){
          alert('Build name is empty');
          return false;
      }
      else{
          return true;
      }
   
    }
  </script>
<body>
    <?php
    if(isset($_FILES['buildimage'])){
        $newname = $_POST['buildname'];

        $errors = array();
        $file_name = $_FILES['buildimage']['name'];
        $file_size = $_FILES['buildimage']['size'];
        $file_tmp = $_FILES['buildimage']['tmp_name'];
        $file_type  = $_FILES['buildimage']['type'];
        $tmp = explode('.',$_FILES['buildimage']['name']);
        $file_ext = strtolower(end($tmp));
        $newname = $newname .".". $file_ext;
        $extensions = array("jpeg","jpg","png");
        if(in_array($file_ext,$extensions)===false){
            $errors[] = "please choose jpeg,jpg or png file";
        }
        if($file_size > 52428800){
            $errors[] = "file must be smaller than 5 mb";
        }
        if(empty($errors)){
            move_uploaded_file($file_tmp,"D:/xampp/htdocs/css/images/".$newname);
            echo "<script>console.log('success')</script>";
        }
        else{
            print_r($errors);
        }

    }
    ?>
  <header><div class='headertop'><div class='logo'><a href='index.html'><img class='logo-img' src='pcpp-logo.svg'></a></div>
<div class='navigate'>
    <ul>
        <li><a href='login.html'>Login</a></li>
        <li><a href='register.html'>Register</a></li>
    </ul>
</div>
</div>
<div class='headerbottom'> 
    <div class='bottomnav'>
        <a href='sysbuilder.php' class='navbuttons' id='nav1'><svg class='navicon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><g data-name='Layer 2'><path d='M23.85 7.87a6.39 6.39 0 0 1-1.79 3.31 6.54 6.54 0 0 1-6.93 1.5L4.58 23.22a2.57 2.57 0 0 1-1.89.78 2.64 2.64 0 0 1-1.91-.78 2.68 2.68 0 0 1-.78-1.9 2.71 2.71 0 0 1 .78-1.9L11.32 8.87a6.54 6.54 0 0 1 1.5-6.93A6.39 6.39 0 0 1 16.13.15a6.12 6.12 0 0 1 3.63.29l-4.1 4.1.4 3.4 3.4.4 4.1-4.1a6.12 6.12 0 0 1 .29 3.63z' data-name='Layer 1'></path></g></svg>System Builder </a>
        <a href='buildguides.php' class='navbuttons' id='nav2'><svg class='navicon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18 24'><g data-name='Layer 2'><path d='M12 0H0v24h18V6zm4 22H2v-2h3v-1H2v-2h5v-1H2v-2h3v-1H2v-2h5v-1H2V8h3V7H2V5h5V4H2V2h9v5h5z' data-name='Layer 1'></path></g></svg>Build Guides </a>
        <a href='browse.php' class='navbuttons' id='nav3'><svg class='navicon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><g data-name='Layer 2'><g data-name='Layer 1'><path d='M8 8h8v8H8z'></path><path d='M24 9V7h-2V4a2 2 0 0 0-2-2h-3V0h-2v2h-2V0h-2v2H9V0H7v2H4a2 2 0 0 0-2 2v3H0v2h2v2H0v2h2v2H0v2h2v3a2 2 0 0 0 2 2h3v2h2v-2h2v2h2v-2h2v2h2v-2h3a2 2 0 0 0 2-2v-3h2v-2h-2v-2h2v-2h-2V9zm-4 11H4V4h16z'></path></g></g></svg>Browse Products </a>
    </div>
    
</div>
</header>
<main>
    <div class='homepagewrapper'>
        <div class='buildguides'>
            <div class='buildguidesinfo'>
                <h3>Build Guides</h3>
                <p>Building your own PC and need ideas on where to get started? <br>Explore our build guides which cover systems for a variety of use-cases and budgets.</p>
            </div>
            <div class='buildguidescards'>
                <div class='buildcard' >
                    <div class='guide_head'>Entry Level Gaming Build</div>
                    <div class='guide_content'><ul class='unstyled-list'>
                        <li>Intel core i3</li>
                        <li>Nvidia GTX 1650 Super</li>
                        <li>Cooler Master MasterBox Q300L MicroATX Mini Tower</li>
                    </ul>
                <div class='guide_img_list'>
                    <ul class='unstyled-list'>
                        <li class='guideimg1'><img src='assets/entrycpu.jpg'></li>
                        <li class='guideimg2'><img src='assets/entrycp.jpg'></li>
                        <li class='guideimg3'><img src='assets/entrygpu.jpg'></li>
                    </ul>
                </div>
                </div>
                </div>
                <div class='buildcard'>
                    <div class='guide_head'>Modest Gaming Build</div>
                    <div class='guide_content'><ul class='unstyled-list'>
                        <li>AMD Ryzen 5 5600 G</li>
                        <li>GE Force GTX 1660</li>
                        <li>Fractal Design Focus G Mini MicroATX Mini Towe</li>
                    </ul>
                    <div class='guide_img_list'>
                        <ul class='unstyled-list'>
                            <li class='guideimg1'><img src='assets/modestcpu.jpg'></li>
                            <li class='guideimg2'><img src='assets/modestcp.jpg'></li>
                            <li class='guideimg3'><img src='assets/modestgpu.jpg'></li>
                        </ul>
                    </div></div>
                </div>
                <div class='buildcard'>
                    <div class='guide_head'>Expensive Gaming Build</div>
                    <div class='guide_content'><ul class='unstyled-list'>
                        <li>AMD Ryzen 5 5600 X</li>
                        <li>Nvidia RTX 3080</li>
                        <li>be quiet! Pure Base 500DX ATX Mid Tower</li>
                    </ul>
                    <div class='guide_img_list'>
                        <ul class='unstyled-list'>
                            <li class='guideimg1'><img src='assets/expcpu.jpg'></li>
                            <li class='guideimg2'><img src='assets/expcp.jpg'></li>
                            <li class='guideimg3'><img src='assets/expgpu.jpg'></li>
                        </ul>
                    </div>
                
                </div>
                </div>
            </div>
        </div>
    </div>
</main>
<section class='about'>
    <div class='aboutwrapper'>
        <h3 style='text-align: center;font-size: 2em;'>User Builds</h3>
        <div class='aboutdetails'>
           <h4>Submit Build Guide </h4> 
           <p>PCPartPicker provides computer part selection, compatibility, and pricing guidance for do-it-yourself computer builders. Assemble your virtual part lists with PCPartPicker and we'll provide compatibility guidance with up-to-date pricing from dozens of the most popular online retailers. </p>
        </div>
        <div class='userbuildguideform'>
           <form name='buildform' action='' method='POST' enctype='multipart/form-data' onsubmit='return validateBuildSubmission()'> 
               <input name='buildname' type='text' placeholder='Enter Build name:'>
               <input name='buildimage' type='file' accept='image/*'/>
               <input type='submit' value='Submit Build Guide'/>
           </form>
         </div>
           <div class="usertitle">See some builds from other users</div>
           <div id='buildimages'>
               <?php
            $handle = opendir(dirname(realpath(__FILE__)).'/images/');
            while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
             $newname = pathinfo($file,PATHINFO_FILENAME);
             echo '
             <div class="userbuildcard">
             <p>'.$newname.'</p>
             <img src="images/'.$file.'" border="0" class="buildimagesfromuser"/>
             </div>
             ';
                 }
                }
            ?>
           </div>
         
    </div>
</section>

<footer style='    background-color: black;
padding: 2em;'>
    <div class='footerdetails'>
        <nav><ul class='footerlinks unstyled-list'>
            <li><a href='index.html'>Home</a></li>
            <li><a href='sysbuilder.html'>System Builder</a></li>
            <li><a href='#'>Products</a></li>
        </ul></nav>
        <h3 class='footercopy'>&copy; Copyright 2022 PCPartsCompatability</h3>
    </div>
</footer>

</body>
</html>

