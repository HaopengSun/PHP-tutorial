<?php
  echo "<br>";
  echo "Calculator:";
?>

<form method="GET">
  <input type="number" name="num1" placeholder="number 1">
  <input type="number" name="num2" placeholder="number 2">
  <select name="operator">
    <option value="add">Add</option>
    <option value="multiple">Multiple</option>
    <option value="subtract">Subtract</option>
    <option value="divide">Divide</option>
  </select>
  <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is: </p>
<?php
  if(isset($_GET['submit'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];
    $result = 0;
    switch ($operator) {
      case "add":
        $result = $num1 + $num2;
        break;
      case "multiple":
        $result = $num1 * $num2;
        break;
      case "divide":
        $result = $num1 / $num2;
        break;
      case "subtract":
        $result = $num1 - $num2;
        break;
      default:
        $result;
    }
    echo $result;
  }
?>