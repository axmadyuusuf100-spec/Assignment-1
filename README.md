# PHP Practice Exercises (Q1 – Q10)

A collection of 10 beginner PHP exercises covering conditions (`if / elseif`), loops (`for`, `while`), number logic (LCM, HCF, prime numbers), and HTML output with `echo`.

## Project Structure

```
├── index.php   # All 10 questions
└── README.md
```

## How to Run

1. Install PHP or a local server (XAMPP / Laragon).
2. Put `index.php` in your server folder (e.g. `htdocs`).
3. Open `http://localhost/index.php` in your browser.

Or from the terminal: `php -S localhost:8000`

## Topics Covered

| Q | Topic |
|---|-------|
| 1 | Greatest & smallest of 3 numbers |
| 2 | Divisibility by 3 and 5 |
| 3 | Odd/even numbers in a range |
| 4 | Numbers divisible by 2 and 5 |
| 5 | Reverse a number |
| 6 | LCM of two numbers |
| 7 | HCF of two numbers |
| 8 | 12×12 multiplication table |
| 9 | Check if a number is prime |
| 10 | Prime numbers from 10 to 50 |

---

## Q1 – Greatest and Smallest of Three Numbers

```php
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
```

Compares `$a`, `$b`, `$c` using `if` statements to find the greatest and smallest.
**Output:** Greatest = 45, Smallest = 7

---

## Q2 – Divisibility by 3 and 5

```php
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
```

Uses `%` (modulus) with `if / elseif / else` to check whether a number is divisible by 3, 5, both, or neither.
**Output (number = 9):** 9 is divisible by 3

---

## Q3 – Odd and Even Numbers in a Range

```php
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
```

Uses two `for` loops: one prints odd numbers from 2 to 20, the other prints even numbers counting down from 35 to 7.

---

## Q4 – Numbers Divisible by 2 and 5

```php
echo "<br>Q4<br>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo "$i ";
    }
}
```

Loops from 50 down to 2 and prints numbers divisible by both 2 and 5.
**Output:** 50 40 30 20 10

---

## Q5 – Reverse a Number

```php
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
```

Uses a `while` loop: takes the last digit with `% 10`, builds the reversed number, then removes the last digit.
**Output:** 12345 → 54321

---

## Q6 – LCM of Two Numbers

```php
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
```

Starts from the larger number and increases until a number is divisible by both.
**Output:** LCM of 8 and 12 = 24

---

## Q7 – HCF of Two Numbers

```php
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
```

Loops from 1 to the smaller number and keeps the largest value that divides both numbers.
**Output:** HCF of 18 and 24 = 6

---

## Q8 – Multiplication Table

```php
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
```

Uses nested `for` loops to build a 12×12 HTML table.

---

## Q9 – Prime Number Check

```php
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
```

Checks if any number from 2 to `n-1` divides the number evenly. If none does, it is prime.
**Output (number = 24):** 24 is not a prime number

---

## Q10 – Prime Numbers from 10 to 50

```php
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
```

Runs the prime check inside an outer loop from 10 to 50.
**Output:** 11 13 17 19 23 29 31 37 41 43 47

---
