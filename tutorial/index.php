<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP tutorial</title>
</head>

<body>

  <form method="GET">
    <input type="text" name="person">
    <button>SUBMIT</button>
  </form>

  <?php
    echo "echo something ";
    print "print something ";
    echo 123;
    $name = "HP";
    echo $name." is my name";

    // not working currently
    // $person = $_GET['person'];
    // echo $person." is what you just input."

    echo "<br>";
    echo "PHP function of strlen ";
    echo strlen("hi world");

    echo "<br>";
    echo "PHP function of str_word_count ";
    echo str_word_count("hi world");

    function writeMsg() {
      echo "<br>";
      echo "function print: Hello world!";
    }
    writeMsg();

    $arr = array('Daniel', 'Micheal', 'Dennis');
    echo "<br>";
    echo "return the first element in an array: ";
    echo $arr['0'];

    // comparison operators
    $x = 5;
    $y = 10;
    echo "<br>";
    if ($x === $y) {
      echo "True";
    }

    if ($x !== $y) {
      echo "False";
    }

    // increment/decrement
    $n = 10;
    echo "<br>";
    echo "increment/decrement";
    echo ++$n;
    $m = 10;
    echo $m++;
    echo $m;

    // logical operator "or" "and" || && "xor"

  ?>
  
</body>

</html>