<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo("I am mr Echooooo <br/>");
        echo(phpversion());

        $color = "Red";
        echo "<br/>";
        echo $color;
        echo "<br/> My best color is " . $color . " and blue";

        // This is a new comment
        // Single-line Comment
        # Also A Single-line Comment
        /* Multi-line Comment = shft+Alt+A */

        # Variables
        $x = 5;
        $y = 'Johndoe';
        echo $x . $y;
        echo '<br />';

        // Datatypes in php 
        // String
        // Interger 
        // Float 
        // Boolean
        // Array 
        // Object 
        // Null 
        // Resources

        var_dump(5);
        echo '<br />';
        var_dump("John");
        echo '<br />';
        var_dump(3.14);
        echo '<br />';
        var_dump(true);
        echo '<br />';
        var_dump([2, 3, 56]);
        echo '<br />';
        var_dump(NULL);


        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        echo "<h2>" . $txt1 . "</h2>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo $x + $y;

        $value1 = " Learn PHP";
        echo "<h2>" . $value1 . "</h2>" . "<br>";

        print "<h2>PHP is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!";

        $isPlaying = true;
        $notPlaying = false;

        if($isPlaying){
            echo "<br/> i am playing";
        }elseif($notPlaying){
            echo "i am not playing";
        };

        echo "<br/>";

        $cars = array("BMW", "Nissan", "Benz", "Camery");
        $cars = ["BMW", "Nissan", "Benz", "Camery"];
        var_dump($cars);
        echo "<br/>";

        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }
            public function message() {
              return "My car is a " . $this->color . " " . $this->model . "!";
            }
          }
          
          $myCar = new Car("red", "Volvo");
          var_dump($myCar);

        $empty = NULL;
        $empty = "emmanuel: ";
        var_dump($empty);
        
        echo "<br/>";

        $studentAge = 10;
        
        $studentAge = (string) $studentAge;
        var_dump($studentAge);

        echo "<br/>";

        // String Length
        echo strlen("Ekene");

        echo "<br/>";
        // Word Count
        echo str_word_count("Hello world!");

        echo "<br/>";
        
        // Search for text within a string
        echo strpos("Hello world!", "world");
        
        echo "<br/>";
        $x = "Hello World!";
        echo strtoupper($x);
        
        echo "<br/>";
        $x = "Hello World!";
        echo strtolower($x);
        
        echo "<br/>";
        $x = "Hello World!";
        echo str_replace("World", "Dolly", $x);
        
        echo "<br/>";
        $x = "Hello World!";
        echo strrev($x);
        
        echo "<br/>";
        $x = "He + llo + World!";
        $y = explode("+", $x);
        print_r($y);

        echo "<br/>";
        $x = "Hello";
        $y = "World";
        $z = $x . $y;
        echo $z;
        
        echo "<br/>";
        $x = "Hello World!";
        echo substr($x, 6, 6);

        echo "<br/>";
        $x = "Hello World!";
        echo substr($x, -5, 3);
        
        $x = "We are the so called \"Vikings\" form the north.";

        echo "<br/>";
        $num = 4* 2.5;
        var_dump($num);

        echo "<br/>";
        $maxValue = PHP_INT_MAX;
        echo "The maximum integer value on this system is: $maxValue";

        $x = 5985;
        var_dump(is_int($x));
        
        $x = 59.85;
        var_dump(is_int($x));

        $number1 = 0.1 + 0.2;
        $number2 = 0.3;

        $tolerance = PHP_FLOAT_EPSILON;
        if (abs($number1 - $number2) < $tolerance) {
            echo "The numbers are considered equal.";
        } else {
            echo "The numbers are not equal.";
        }

        echo "<br/>";
        $x = 5985;
        var_dump(is_numeric($x));
        echo "<br/>";

        $x = "5985";
        var_dump(is_numeric($x));
        echo "<br/>";
        $x = "59.85" + 100;
        var_dump(is_numeric($x));
        echo "59.85" + 100;
        echo "<br/>";

        $x = "Hello";
        var_dump(is_numeric($x));

        echo "<br/>";
        $a = 5;         // integer
        $b = 5.34;      // float
        $c = "hello";   // string
        $d = true;      // boolean
        $e = NULL;      // NULL
        
        $a = (string) $a;
        $b = (string) $b;
        $c = (string) $c;
        $d = (string) $d;
        $e = (string) $e;

        //To verify the type of any object in PHP, use the var_dump() function:
        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);

        $myArray = array(
            array('x', 'y', 'z'),
            array('x', 'y', 'z'),
            array('x', 'y', 'z'),
            array('x', 'y', 'z'),
            array('x', 'y', 'z'),
            array('x', 'y', 'z'),
        );

        var_dump($myArray[0]);
        echo "<br/>";
        var_dump($myArray[1]);
        echo "<br/>";
        var_dump($myArray[2]);
        echo "<br/>";
        var_dump($myArray[3]);
        echo "<br/>";
        var_dump($myArray[4]);
        echo "<br/>";
        var_dump($myArray[5]);
        
        echo "<br/>";
        $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo $b[0];
        
        echo "<br/>";
        echo(pi());
        
        echo "<br/>";
        $variable = 9999987654320987654;
        echo(pi()*$variable );
        
        echo "<br/>";
        echo(min(0, 150, 30, 20, -8, -200));
        echo "<br/>";
        echo(max(0, 150, 30, 20, -8, -200));
        echo "<br/>";
        echo(abs(-6.7));
        echo "<br/>";
        echo(abs(64));
        
        echo "<br/>";
        echo(rand());
        
        
        echo "<br/>";
        define("GREETING", "Welcome to W3Schools.com");
        echo GREETING;

        echo "<br/>";
        $x = 13;  
        $y = 6;

        echo $x % $y;

        echo "<br/>";

        $a = 13;  
        $b = 6;

        echo $a - $b;       

        $x = 5;  
        $y = 10;
        
        echo "<br>";
        
        var_dump ($x <=> $y); // returns -1 because $x is less than $y
        echo "<br>";
        
        $x = 10;  
        $y = 10;

        var_dump ($x <=> $y); // returns 0 because values are equal
        echo "<br>";

        $x = 15;  
        $y = 10;

        var_dump ($x <=> $y); // returns +1 because $x is greater than $y

        echo "<br>";


        $t = date("H");

        if ($t < "20") {
        echo "Have a good day!";
        } else {
        echo "Have a good night!";
        }

        echo "<br>";
        $t = date("H");

        if ($t < "10") {
        echo "Have a good morning!";
        } elseif ($t < "17") {
        echo "Have a good day!";
        } elseif ($t < "20") {
        echo "Have a good evening!";
        } else {
        echo "Have a good night!";
        }

        echo "<br>";
        // $i = 1;
        // while ($i < 100) {
        // if ($i == 50) continue;
        // echo $i;
        // $i++;
        // }

        // $i = 0;
        // while ($i < 100) {
        // $i+=10;
        // echo $i "<br>";
        // }

        echo "<br>";
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l") . "<br>";
        echo("&copy; 2010 - "),( date("Y"));


        echo "<br>";
        function myMessage(){
            echo "Hello Raven";
        }
        
        myMessage();
        
        echo "<br>";
        echo "<br>";
        function familyName($Fname){
            echo "$Fname Talon.<br>";
        }
        
        familyName("Shin");
        familyName("Iris");
        familyName("Chika");
        familyName("Rave");
        familyName("Ram");
        
        
        echo "<br>";
        function Family($name, $year) {
            echo "$name Talon, born in $year.<br>";
        }
        Family("Shin","2098");
        Family("Iris","999");
        Family("Chika", "1005");
        Family("Rave", "1025");
        Family("Ram", "1028");
        
        echo "<br>";
        
        $color = 'red';
        switch ($color) {
            case'red':
                echo "Your skin color is " . $color;
            break;
            case 'green':
                echo "Your skin color is ". $color;
            break;
            case 'blue':
                echo "Your skin color is ". $color;
            break;
            default:
                echo "Unknown skin color ". $color;
        }
        
        echo"<br>";
        for ($i=0; $i <= 10; $i++) { 
            echo "the number is:" . $i. "<br/>";
        }
        
        echo "<br>";
        for ($i=10; $i >= 0; $i--) { 
            echo "the number is:". $i. "<br/>";
        }
        
        echo"<br>";
        for ($i=0; $i <= 10; $i++) { 
            if ($i == 5) continue; 
            echo "the number is:" . $i. "<br/>";
        }
        
        echo"<br>";
        for ($i=0; $i <= 10; $i++) { 
            if ($i == 5) break; 
            echo "the number is:" . $i. "<br/>";
        };
        
        echo"<br>";
        for ($i = 0; $i <= 10000; $i+=197) {  
            echo "Souls:" . $i. "<br/>";
        };
        
        echo "<br>";

        $i = 0;
        while($i <= 100){
            echo "the number is " . $i. "<br>";
            $i += 10;
        }
        
        
    ?>

<script>

    // ((function() {
    //     setInterval(() => {
    //         console.log('Hello World');
    //         }, 1000);
    //     }))()

    //     $name = 'Ekene'
    //     console.log($name);

    //     score = 20
    //     score == 20 ? score++ : score--;
</script>

</body>
</html>