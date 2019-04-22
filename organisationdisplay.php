<!DOCTYPE html>
<html>
<head>
  <title>IMAGE UPLOAD</title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="static/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="static/prelogin.css">

</head>
</body>
<div class="a1">
  <div id="content">
    <form method="post" action=organisationdisplay1.php enctype="multipart/form-data">
      <input type ="hidden" name="size" value="10000000">
      <div>
        <input type="file" name="image">
      </div>
      <div id="abc">
        <textarea name="text" cols="25" rows="17" placeholder="About your upcoming camp">
        </textarea>
      </div>
      <div>
          <button class="imgbtn" name="upload"><i class="fa fa-image" style="font-size:24px"></i></button>
      </div>

    </form>
  </div>
</div>
</head>
</html>
<?php
session_start();
echo "welcome";
echo $_SESSION['user'];
?>