<html>
  <head>
    <title>Form in PHP / MySQL</title>
  </head>
  <body>
    <form method="POST" action="" name="form">
      Name : <input type="text" name="name" placeholder="Enter your name" /><br />
      Email : <input type="email" name="email" placeholder="Enter your Email" /><br />
      Website: <input type="text" name="website" placeholder="Enter your Website" /><br />
      Comment: <textarea name="comment" rows="5" cols="40"></textarea> <br />
      <input type="radio" name="Gender" value="Male" checked> Male
      <input type="radio" name="Gender" value="female"><br />
      <input type="submit" value="Submit" name="S" />
      <h2>Your Input </h2>

    </form>
  </body>
</html>

<?php    
if (isset($_POST["S"])) {       
  $nama = $_POST["name"]; echo "<b>$nama</b> <br>";       
  $email = $_POST["email"]; echo "<b>$email</b> <br>";      
  $web = $_POST["website"]; echo "<b>$web</b> <br>";       
  $comment = $_POST["comment"]; echo "<b>$comment</b> <br>";       
  $Gender = $_POST["Gender"]; echo "<b>$Gender</b> <br>";    
}  
?>