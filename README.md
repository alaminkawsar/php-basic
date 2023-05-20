# php-basic
We have followed the 'Leraning-PHP-7' book.<br>
## PHP - Installation
Intsall  php7.4 included some package using a single command.
```
sudo apt-get install -y php7.4-cli php7.4-json php7.4-common php7.4-mysql php7.4-zip php7.4-gd php7.4-mbstring php7.4-curl php7.4-xml php7.4-bcmath
```

## Run a sample code
see the code below:
```
<?php
    echo "Hello World!";
?>
```
PHP provides built in server that we already install. Save the above program as 'main.php' and run the following command ```php -S localhost:8080```. you will get a link like that ```http://localhost:8080```.<br>
copy the linke ```http://localhost:8080/main.php``` and past on browser url.<br>
Congratulations! You will get 'Hello World' message. <br>

## PHP BASICS SYNTAX
### php code block
```<?php    ?>``` this block is php initialize '<?php' and closing'?>' syntax. we will write code in this block.

### printing message
```
<?php
    echo "Hello World!";
    var_dump("This is var dump message");
    print_r("This is print_r message");
?>
```

<b>Output:</b>
```
Hello World!
string(29) "This is var dump message"
This is print_r message
```

```echo``` print normal message. <br>
```var_dump()``` print message with object/data type <br>
```print_r``` print normal message/array with index. <br>


### Comments
```//``` is single line comment <br>
```/*...*/``` is multi line comments <br>

<b>Example:</b>

```
<?php
    /*
    * This is the first file loaded by the web server.
    * It prints some messages and html from other files.
    */
    // let's print a message from php
    echo 'hello world';
    // and then include the
?>
```

### Variables
Has no predefined data type. Use $ sign infront of variable<br>
```
<?php
    $a = 1;
    $b = 2;
    $c = $a + $b;
    echo $c; // 3
?>
```
<b>Some Rules of using variables</b> <br>

```
<?php
    $_some_value = 'abc'; // valid
    $1number = 12.3; // not valid!
    $some$signs% = '&^%'; // not valid!
    $go_2_home = "ok"; // valid
    $go_2_Home = 'no'; // this is a differen
?>
```
### Data Types
PHP has eight primitive types, but for now, we will focus on its four scalar types:

<li>
    <ul> Booleans</ul>
    <ul> Integers</ul>
    <ul> Floating Points Numbers as floats</ul>
    <ul> Strings</ul>
</li>
Markup : * Booleans

         * Integers
         * Floating Points Numbers as floats
         * Strings
```
<?php
    $number = 123;
    var_dump($number);
    $number = 'abc';
    var_dump($number);
?>
```
<b>Type juggling</b>
PHP tries to convert the data type of a variable only when there is a
context where the type of variable needed is different. But PHP does
not change the value and type of the variable itself. Instead, it will
take the value and try to transform it, leaving the variable intact.

*For Example*
```
<?php
    $a = "1";
    $b = 2;
    var_dump($a + $b); // 3
    var_dump($a . $b); // 12
?>
```

### Operators

#### Arithmetic Operator
```<?php
    $a = 10;
    $b = 3;
    var_dump($a + $b); //plus 13
    var_dump($a - $b); //minus 7
    var_dump($a * $b); //multiplication 30
    var_dump($a / $b); //division 3.333333...
    var_dump($a % $b); //modulus 1
    var_dump($a ** $b); //power 1000
    var_dump(-$a); //negative -10
?>
```

#### Assignment operators 
Assignment operator assigns the result of an expression to a variable. There are a series of assignment operators that work as shortcuts. <br>
```
<?php
    $a = 13;
    $a += 14; // same as $a = $a + 14;
    var_dump($a);
    $a -= 2; // same as $a = $a - 2;
    var_dump($a);
    $a *= 4; // same as $a = $a * 4;
    var_dump($a);
?>
```

#### Comparison operators 
There is also the special operator
<=> (spaceship) that compares both the operands and returns an integer instead of a
Boolean. When comparing a with b, the result will be less than 0 if a is less than b, 0 if
a equals b, and greater than 0 if a is greater than b. Let's see some examples: <br>
```
<?php
    var_dump(2< 3); // true
    var_dump(3< 3); // false
    var_dump(3<= 3); // true
    var_dump(4<= 3); // false
    var_dump(2> 3); // false
    var_dump(3>= 3); // true
    var_dump(3> 3); // false
    var_dump(1<=> 2); // int less than 0
    var_dump(1<=> 1); // 0
    var_dump(3<=> 2); // int greater than 0
?>
```
<b> Difference Between equals and identical operator </b> </br>
The == (equals) operator evaluates two
expressions after type juggling, that is, it will try to transform both expressions to the
same type, and then compare them. Instead, the === (identical) operator evaluates
two expressions without type juggling, so even if they look the same, if they are not of
the same type, the comparison will return false . The same applies to != or <> (not
equal to) and !== (not identical):<br>
```
<?php
    $a = 3;
    $b = '3';
    $c = 5;
    var_dump($a== $b); // true
    var_dump($a=== $b); // false
    var_dump($a!= $b); // false
    var_dump($a!== $b); // true
    var_dump($a== $c); // false
    var_dump($a<> $c); // true
?>
```

#### Logical operators
Four Types of Logical Operators.

```
<?php
    var_dump(true && true); // true
    var_dump(true && false); // false
    var_dump(true || false); // true
    var_dump(false || false); // false
    var_dump(!false); // true
?>
```
#### Incrementing and decrementing operators
```
<?php
    $a = 3;
    $b = $a++; // $b is 3, $a is 4
    var_dump($a, $b);
    $b = ++$a; // $a and $b are 5
    var_dump($a, $b);
?>
```

### ARRAYS
#### Initializing array
```
<?php
    $empty1 = [];
    $empty2 = array();
    $names1 = ['Harry', 'Ron', 'Hermione'];
    $names2 = array('Harry', 'Ron', 'Hermione');
    $status1 = [
    'name' => 'James Potter',
    'status' => 'dead'
    ];
    $status2 = array(
    'name' => 'James Potter',
    'status' => 'dead'
    );
?>
```

#### Populating arrays
Array can be changable. The changing way is the following:
```
<?php
    $names = ['Harry','Ron', 'Hermione'];
    $status = [
    'name' => 'James Potter',
    'status' => 'dead'
    ];
    $names[] = 'Neville';
    $status['age'] = 32;
    print_r($names, $status);
?>
<br>
Removing elements from the array ```unset($status['status'])``` <br>

#### Accessing element from an array
```
<?php
    $names = ['Harry', 'Ron', 'Hermione'];
    $names['badguy'] = 'Voldemort';
    $names[8] = 'Snape';
    $names[] = 'McGonagall';
?>
print_r($names);
```
<br>

