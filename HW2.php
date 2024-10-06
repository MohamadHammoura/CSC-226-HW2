<?php
// #1
// An interpreted language like PHP is executed line by line at runtime by an interpreter
// In contrast, a compiled language is transformed into machine code by a compiler before execution.

// #2
// The advantages of an interpreted language are easier testing since there is no need to compile, code can be run on any platform, and flexibility in variable usage
// The disadvantages are slower execution, runtime errors, and exposed source code.

// #3
// Indexed arrays are numeric and start from 0
$fruits = ['Apple', 'Banana', 'Cherry'];
echo $fruits[0]; // Outputs: Apple

// Associative arrays use named keys that you assign and use to access them.
$person = [
    'name' => 'John Doe',
    'age' => 30,
    'occupation' => 'Developer'
];
echo $person['name']; // Outputs: John Doe


// #4
//Method 1
$person = [
    'name' => 'Jane Smith',
    'age' => 25,
    'occupation' => 'Designer'
];

foreach ($person as $key => $value) {
    echo "$key: $value\n";
}


//Method 2

$person = [
    'name' => 'Jane Smith',
    'age' => 25,
    'occupation' => 'Designer'
];

foreach ($person as $key => $value) {
    echo "$key: $value\n";
}



// #5
$arr = [1 => 'apple', 2 => 'banana', 'key' => 'orange'];
echo $arr[1];
echo $arr['key'];
// This code will output appleorange because key 1 is assigned to apple and key 'key' is orange


// #6

class Car
{
    // Properties
    public $make;
    public $model;
    public $year;
    private $isRunning = false;

    // Constructor
    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Methods
    public function start()
    {
        if (!$this->isRunning) {
            $this->isRunning = true;
            echo "The car has started.\n";
        } else {
            echo "The car is already running.\n";
        }
    }

    public function stop()
    {
        if ($this->isRunning) {
            $this->isRunning = false;
            echo "The car has stopped.\n";
        } else {
            echo "The car is already stopped.\n";
        }
    }
}


// #7
// _construct() creates a contructor to initialize object properties and allows passing parameters during instantiation.
// it's different from regular methods because The constructor is automatically called when a new instance of the class is created using 'new'


// #8
// integer, float, string, boolean, array, object, null, resource, callable

// #9
// $this Refers to the current object instance within a class context

class Greeting {
    private $message;

    public function setMessage($msg) {
        $this->message = $msg;
    }

    public function displayMessage() {
        echo $this->message;
    }
}

$greet = new Greeting();
$greet->setMessage('Hello, World!');
$greet->displayMessage(); // Outputs: Hello, World!





// #10

$number = 10;

if ($number > 0) {
    echo "The number is positive.";
} elseif ($number < 0) {
    echo "The number is negative.";
} else {
    echo "The number is zero.";
}





// #11
// == compares the equality of 2 values
// === compares the identity type and value

$var1 = 0;
$var2 = '0';

if ($var1 == $var2) {
    echo "Equal with == operator.";
} else {
    echo "Not equal with == operator.";
}

if ($var1 === $var2) {
    echo "Equal with === operator.";
} else {
    echo "Not equal with === operator.";
}


$a = 10;
$b = 20;
// #12
// Ternary operator is a shorthand version of an if else statement
echo ($a > $b) ? "a is greater" : "b is greater";

// #13
$str = "Hello, World!";

if (strlen($str) > 10) {
    echo "The string is longer than 10 characters.";
} else {
    echo "The string is 10 characters or less.";
}



// #14
// instanceof checks if an object is an instance of a specific class or a subclass.
class Vehicle {}
class Carr extends Vehicle {}
$myCar = new Carr();

if ($myCar instanceof Vehicle) {
    echo "myCar is an instance of Vehicle.";
} else {
    echo "myCar is not an instance of Vehicle.";
}



// #15
// instanceof would be used to ensure an object is of a specific class before performing operations,  or when working with inheritance
function processPayment($paymentMethod) {
    if ($paymentMethod instanceof CreditCard) {
        // Process credit card payment
    } elseif ($paymentMethod instanceof PayPal) {
        // Process PayPal payment
    } else {
        throw new Exception("Unsupported payment method.");
    }
}


// #16
class Animal {}
class Dog extends Animal {}
$dog = new Dog();
var_dump($dog instanceof Animal);

// The code will output bool(true) because $dog is an instance of Dog.
//Since Dog extends Animal, $dog is also considered an instance of Animal due to inheritance.
//The instanceof operator returns true, and var_dump outputs the boolean value.