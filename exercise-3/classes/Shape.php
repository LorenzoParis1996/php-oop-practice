<?php 

abstract class Shape {
    abstract public function calculateArea();
}

/*When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

So, when a child class is inherited from an abstract class, we have the following rules:

The child class method must be defined with the same name and it redeclares the parent abstract method
The child class method must be defined with the same or a less restricted access modifier
The number of required arguments must be the same. However, the child class may have optional arguments in addition*/