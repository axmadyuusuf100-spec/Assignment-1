<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    echo(" Q1 <br>"); 
 
$a = 12;
$b = 45;
$c = 7;


$greatest = $a;
if ($b > $greatest) $greatest = $b;
if ($c > $greatest) $greatest = $c;

$smallest = $a;
if ($b < $smallest) $smallest = $b;
if ($c < $smallest) $smallest = $c;

echo(" Numbers: a=$a, b=$b, c=$c <br>\n");
echo "Greatest: $greatest<br>\n";
echo "Smallest: $smallest<br>\n";


echo ("Q2<br>");

$number = 9;

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "$number is divisible by both 3 and 5\n";
} elseif ($number % 3 == 0) {
    echo "$number is divisible by 3 <br>\n";
} elseif ($number % 5 == 0) {
    echo "$number is divisible by 5 <br>\n";
} else {
    echo "$number is not divisible by 3 or 5<br>\n";
}



echo "Q3<br>";

echo "Odd numbers from 2 to 20:<br>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}

echo "<br>Even numbers from 35 to 7:<br>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}


echo "<br>Q4<br>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo "$i ";
    }
}


echo "<br>Q5<br>";

$number = 12345;
$original = $number;
$reversed = 0;

while ($number > 0) {
    $lastDigit = $number % 10;
    $reversed = ($reversed * 10) + $lastDigit;
    $number = (int)($number / 10);
}

echo "Original: $original<br>";
echo "Reversed: $reversed<br>";


echo "Q6<br>";

$num1 = 8;
$num2 = 12;
$lcm = 1;

$max = ($num1 > $num2) ? $num1 : $num2;

for ($i = $max; ; $i++) {
    if ($i % $num1 == 0 && $i % $num2 == 0) {
        $lcm = $i;
        break;
    }
}

echo "LCM of $num1 and $num2 = $lcm <br>";


echo "Q7<br>";

$num1 = 18;
$num2 = 24;
$hcf = 1;

for ($i = 1; $i <= $num1 && $i <= $num2; $i++) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }
}

echo "HCF of $num1 and $num2 = $hcf <br>";


echo "Q8<br>";

echo "<table border='1' cellpadding='5'>";
for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";


echo "Q9<br>";

$number = 24;
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$number is a prime number <br>";
} else {
    echo "$number is not a prime number <br>";
}


echo "Q10<br>";

for ($number = 10; $number <= 50; $number++) {
    $isPrime = true;

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo "$number <br>";
    }
}




    ?>
    
</body>
</html>