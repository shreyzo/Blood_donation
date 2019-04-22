<!DOCTYPE html>
<html>
<head>
  <title>IMAGE UPLOAD</title>

  <link rel="stylesheet" type="text/css" href="static/prelogin.css">

</head>
</body>
<div class="a1">
  <?php
  session_start();
  echo "<h2>Welcome!  </h2>";
  echo $_SESSION['user'];
  ?>
</div>
<div class="a1">
    <form method="post" action=organisationdisplay1.php enctype="multipart/form-data">
      <input type ="hidden" name="size" value="10000000">
      <div>
        <input type="file" name="image">
      </div>
        <textarea name="text" cols="25" rows="17" placeholder="About your upcoming camp">
        </textarea>
      <div>
          <button class="button" name="upload">Upload</button>
      </div>

    </form>
</div>
</head>
</html>
