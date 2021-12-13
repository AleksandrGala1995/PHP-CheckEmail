<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть e-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
   
    $posOfDog=strpos($email, "@");
    $posOfFirstDotAfterDog=strpos($email, ".", $posOfDog+1);
    
    
    
   
    
   if (($posOfDog>=1) and ($posOfFirstDotAfterDog>$posOfDog) and !(strpos($email, ".", -1)))
   {
       
        echo "E-mail правильний"; 
   } else 
   {
      echo "E-mail неправильний"; 
   }
}
?>

</body>
</html>