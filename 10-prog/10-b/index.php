<!DOCTYPE html>
<html>
   <head>
      <title>Prime Number Validation</title>
   </head>
   <body>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
         <label>Enter a number: </label>
         <input type="number" name="num" id="num" required>
         <input type="submit" value="Check">
      </form>
      <?php
      if($_SERVER["REQUEST_METHOD"] == "POST"){
         $num = $_POST["num"];
         if(isPrime($num)){
            echo "<p>$num is a prime number.</p>";
         }else{
            echo "<p>$num is not a prime number.</p>";
         }
      }
      function isPrime($num)
      {
         if($num <= 1){
            return false;
         }
         for($i = 2; $i <= sqrt($num); $i++){
            if ($num % $i == 0) {
               return false;
            }
        }
        return true;
    }
    ?>
</body>
</html>