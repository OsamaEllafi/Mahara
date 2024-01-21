<?php

class DivisionByZeroException extends Exception
{
    public function __construct($message = "Cannot divide by zero", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

function divideNumb($dividend, $divisor)
{
    if ($divisor === 0) {
        throw new DivisionByZeroException();
    }

    return $dividend / $divisor;
}


try {
    $result = divideNumb(10, 2);
    echo "Result: " . $result;
    echo PHP_EOL;

    $result = divideNumb(8, 0);
    echo "Result: " . $result;
} catch (DivisionByZeroException $e) {
    echo "Error: " . $e->getMessage();
}
