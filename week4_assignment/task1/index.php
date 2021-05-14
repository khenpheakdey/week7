<?php

echo "
    - Advantages of multiple inheritance:<br>
    <p>Multiple inheritance can have multiple superclasses, 
    your subclass has more opportunities to reuse the inherited attributes 
    and operations of the superclasse which means their no need to rewrite some part
    of code again.</p>

    For example, an user can have phone and computer, so user should inherit from phone and computer classes.

    - Disadvantages of multiple inheritance:
    Multiple inheritance is not allowed in PHP and JAVA. So we must translate 
    it in other ways such as using interfaces or traits in PHP.<br>";

//Example of Multiple inheritance with traits
trait Phone
{
    public function phone()
    {
        echo 'Iphone';
    }
}

trait Computer
{
    public function computer()
    {
        echo 'Mac';
    }
}

class User
{
    use Phone, Computer;
}
echo "<br> Example: <br>";
$pheakdey = new User();
$pheakdey->phone();
$pheakdey->computer();

echo "<br><br>This can be confusing and difficult to maintain because the implemented code for categorizing objects is quite different from the way the user organizes those objects. So, when the user changes their mind or adds another category, it is difficult to figure out how to program the new subclass. Or if there is a change in superclasses,there is a change in subclass.<br>";
