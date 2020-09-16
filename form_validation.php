<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$GLOBALS['f']=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $GLOBALS['f']=1;
    
  } 
if($_POST["name"]!="Mukhil"){
      $nameErr="You are not Mukhil";
      $GLOBALS['f']=1;
      
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $GLOBALS['f']=1;
    
  } 
  if($_POST["email"]!="mukhil99@gmail.com"){
      $emailErr="this is not mukhil's mail";
      $GLOBALS['f']=1;
     
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";$GLOBALS['f']=1;
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if($GLOBALS['f']==0){
      echo '<script > '
      . 'if(alert("signup successfull")==true){ var x="<?php tologin(); ?>";return false;}'
      . 'else {return;} '
      . '</script>';
  }
 
}

function tologin(){
   header('Location:C:\Users\DELL\Documents\NetBeansProjects\virtusa_frontend\public_html\sample.html');
return;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function getf(){
    return $GLOBALS['f'];
    
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
if(getf()==TRUE){echo "http://localhost:8383/virtusa_frontend/index.html";}
?>">  
  *Name: <input type="text" name="name">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  *E-mail: <input type="email" name="email">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  *Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

//<?php
//echo "<h2>Your Input:</h2>";
//echo $name;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $website;
//echo "<br>";
//echo $comment;
//echo "<br>";
//echo $gender;
//?>

</body>
</html>
