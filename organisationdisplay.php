<?php
session_start();
echo "welcome";
echo $_SESSION['user'];
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>IMAGE UPLOAD</title>

</head>
</body>
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
</head>
</html>
