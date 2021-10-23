<html>
<head>
  <title>Code-System00</title>
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Share Your Gist">
  <meta property="og:image" content="https://i.ibb.co/KmhXmzp/Screenshot-20211022-100222.png">
  <meta property="og:description" content="Read and Share Your Code gist">
  <meta property="og:url" content="https://code.system00.security">
  <link rel="shortcut icon" href="https://system00-sec.com/images/favico.png">
</head>
<body>
  <div class="header-string">
  <a href="/add.php">Add Your Gist</a>
  </div>
  <div class="nav">
    <center><img class="logo" src="./img/main logo.png"/></center>
  </div>
<div class="header">
/// Public-Code-Snippets ///
</div><br/>
<?php
function rasmname(){
 $dirname = "code/";
 $codes = glob($dirname."*.snippets");
foreach($codes as $code) {
  $utitle=str_replace(".snippets"," ",$code);
  $atitle=str_replace("code/","// ",$utitle);
  $title=htmlentities( $atitle );
  $gist=file_get_contents($code, true);
  $main=htmlentities( $gist );
   echo '<div class="title"> '.$title.'</div></br></br>';
   echo '<script src="https://gist.github.com/'.$main.'.js"></script>';
  }
}
rasmname();
?>
<div class="footer">
  <br/>
<a href="https://system00-sec.com"><font color="black">System00 Security</font></a> ® All rights reserved<br/><br/>
<font color="#8250df"><a href="https://facebook.com/system00-sec">  @Facebook</a> <a href="https://github.com/system00-security">  @Github</a><a href="mailto:info@system00-sec.com">  @Email</a></font>
</div>
</body>
</html>
