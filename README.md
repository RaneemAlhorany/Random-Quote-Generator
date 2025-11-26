# Random-Quote-Generator

It's stage 1 in your PHP language learning journey

project (3) : Random-Quote-Generator

goal :

    Create a Random Quote Generator using PHP

Requirements

    Create an array that contains at least 10 quotes
    Every time the user click on the button or refresh the page , your PHP code should:
        randomly pick one quote from the array
        
You must use:

        array
        array_rand()
        basic HTML


  
array :

 Definition :
 
        A PHP array is a data structure that stores multiple values in a single variable
        Values can be accessed by index or key

Types of Arrays in PHP :

1) Indexed Array
   
            - Keys are numeric (0,1,2,...)
            - Used for ordered lists
            Example :
                $arr = [10, 20, 30];
                or
                $arr = array(10, 20, 30);

2) Associative Array
   
            - Keys are strings
            - Used when each value must have a named key
            - when order is not important
            - you have multiple attributes for an item
            - different data types as values
            Example :
                $user = [
                    "name" => "Dracula",
                    "age"  => 22
                ];


3) Multidimensional Array
   
            - Array inside another array
            - Used for structured or hierarchical data
            Example :
                $matrix = [
                    [1,2,3],
                    [4,5,6]
                ];
   

Useful Functions :

count($arr)

             Returns number of elements

array_push($arr, $value)

             Add element at end

 array_pop($arr)
 
             Remove last element

array_shift($arr)

             Remove first element

  array_unshift($arr, $value)
  
            Add element at beginning

 isset($arr[key])
 
            Check if element exists

in_array($value, $arr)

             Check if value exists

array_rand($arr)

             Get random key from array
             often used to pick random elements
             returns a key, not the value for one element
             for multiple random keys, pass second argument
             Example of:
                  $arr = ["apple", "banana", "cherry"];
                  $randomKey = array_rand($arr);
                  echo $arr[$randomKey]; // prints a random fruit
             Example of:
                $quotes = ["quote1", "quote2", "quote3"];
                echo $quotes[array_rand($quotes)];

Looping Over Arrays :

        foreach ($arr as $value)
            - iterate over values

        foreach ($arr as $key => $value)
            - iterate with keys

Notes :

        % Arrays in PHP are dynamic (no need to define size)
        % Can mix different data types inside the same array
        % Under the hood, PHP arrays behave like ordered hash maps



