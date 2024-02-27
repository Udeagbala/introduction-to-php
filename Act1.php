<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calculate(...$items){
        $amountOfItems = count($items);
        $n = 0;

        for ($i=0; $i < $amountOfItems; $i++) { 
            $n += $items[$i];
        }
        return $n;
    };
    
    $a = calculate(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);
    echo $a;
    echo "<br>";

    function Myfunction(float $param1, float $param2): float{
        return $param1 + $param2;
    }
    //Dynamic function calling
    $result = call_user_func('Myfunction', 1.11, 2.3);
    echo ($result);

   
    echo "<br>";
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');

    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie name '$cookie_name' is not set";
    }else{
        echo "cookie name '$cookie_name' is set". "<br>";
        echo 'Value is ' . $_COOKIE[$cookie_name];
    }



    ?>
</body>
</html>