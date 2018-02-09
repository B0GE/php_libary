# php_libary
====
A libary with a lots of usefull and helpfull classes . Written in PHP (OOP)



## FAQ



## Basic Usage
For every different Type of Class ýou want to use , you have to tell php to load it.
For example you want to use the class ```php $__test``` you have to tell the autoload you want to use the object Test.
Wich you can do by simply writing ```php $usingTest = true; ```.
The important thing here is that you define ```php $usingTest = true; ``` above the include of the autoload file.
In every chapter of the documentation you also get told what you have to load and what not to .
### Making the autoload load

```php
<?php
$usingTest = true;
include 'fnc/autoload.php';

$__test->string = 'Hey, i rock!';
$__test->__testString();
$
?>
```




