# php-basic

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
PHP provides built in server that we already install. Save the above program as 'main.php' and run the following command ```php -S localhost:8080```. you will get a link like that ```http://localhost:8080```.
Congratulations! You will get 'Hello World' message.
NB: if you not found the message, try it ```http://localhost:8080/main.php```.