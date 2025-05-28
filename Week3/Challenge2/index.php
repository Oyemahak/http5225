<?php
$randomNumber = rand(1, 100);

if ($randomNumber % 3 ==0 && $randomNumber % 5 ===0)
{
echo("$randomNumber - the magic number is FizzBuzz");
}

elseif($randomNumber % 3 == 0)
{
echo("$randomNumber - the magic number is Fizz");
}

elseif($randomNumber % 5 == 0)
{
echo("$randomNumber - the magic number is Buzz");
}

else 
{
echo("$randomNumber - the magic number is the number itself");
}

?>