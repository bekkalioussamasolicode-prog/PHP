<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
  <form action="calc.php" method="post">
  <label for="nb1">First Number :</label>
  <input type="number" name="nb1" id="nb1">
  <label for="nb2">Second Number :</label>
  <input type="number" name="nb2" id="nb2">
  <select name="op" id="ope">
    <option value="plus">Operator +</option>
    <option value="minus">Operator -</option>
    <option value="multi">Operator *</option>
    <option value="div">Operator /</option>
  </select>
  <button type="submit">Calc</button>
  </form>
  <?php 
  // func handling all the calc
  function calc ($num1 , $num2 , $operator) {
    if ($operator === "plus"){
        return $num1 + $num2;
      } elseif ($operator === "minus"){
        return $num1 - $num2;
      } elseif ($operator === "multi"){
        return $num1 * $num2;
      } elseif ($operator === "div"){
        if ($num2 == 0) {
          return "You can't divide by 0";
        }
        return $num1 / $num2;
      }
  }
  // check if there is a post request
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // making sure its not empty 
    if (
      !isset($_POST["nb1"] ,
      $_POST["nb2"] ,
      $_POST["op"]) || $_POST["nb1"] === '' || $_POST["nb2"] === ''
    ) {
      echo"You must fill all the fields";
    } else {
      $num1 = $_POST["nb1"];
      $num2 = $_POST["nb2"];
      $operator = $_POST["op"];
      $result = calc($num1, $num2, $operator);

      echo"Result : $result";
      
    }
  }
  ?>
  
</body>
</html>