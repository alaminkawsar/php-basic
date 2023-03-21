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