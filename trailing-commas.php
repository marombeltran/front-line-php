<?php
// They are now supported in arrays, function call, parameter lists, and closure `use` statements.
// For example: 
$array = [
    'foo',
    'bar',
];

// Next, you'd need to add a third:
$array = [
    'foo',
    'bar',
    'baz', /* Version control systems such as GIT would list two changes instead of one 
              because you did make two actual changes. */
];

// parameter lists
function func ($foo, $bar, $baz, ) {
    echo $foo, ' ', $bar, ' ', $baz, PHP_EOL;
}

// function calls
func ('foo', 'bar', 'baz', );

$message = 'World';

// closure `use` statement
$func = function () use ($message, ) {
    echo 'Hello, ', $message, '!', PHP_EOL;
};

$func();
