<html>
<head>
  <title>Submit snippets - System00 Security</title>
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="nav">
    <center><a href="./"><img class="logo" src="./img/main logo.png"/></a></center>
  </div>
<div class="header">
/// Submit-Code-Snippets ///
</div><br/>
<div class="container">

  <form class="form-2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <h2><span class="log-in">Submit Your Snippets</span></h2>

    <div class="row">
      <p class="float">
        <label for="title"></i>Snippets Title</label>
        <input type="text" name="title" placeholder="Title For Your code" autocomplete="off">
      </p>
      <p class="float">
        <label for="title"></i>Github gist Link</label>
        <input type="text" name="gist" placeholder="JoyGhoshs/330288689998a0c66ecc50bb8a4c519f" class="showpassword" autocomplete="off">
      </p>
    </div>

    <p class="row">
      <input type="submit" name="submit" value="Submit">
    </p>

  </form>
  <?php
$code=$_POST['title'];
$snip=$_POST['gist'];
$file= fopen('./code/'.$code.'.snippets',"w");
fwrite($file,$snip);
fclose($file);
   ?>
</div>
<div class="footer">
  <br/>
<a href="https://system00-sec.com"><font color="black">System00 Security</font></a> ® All rights reserved<br/><br/>
<font color="#8250df"><a href="https://facebook.com/system00-sec">  @Facebook</a> <a href="https://github.com/system00-security">  @Github</a><a href="mailto:info@system00-sec.com">  @Email</a></font>
</div>
</body>
</html>
