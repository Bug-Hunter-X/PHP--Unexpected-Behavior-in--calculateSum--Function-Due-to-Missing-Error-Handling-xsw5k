# PHP: Unexpected Behavior in calculateSum Function

This repository demonstrates a common error in PHP functions: the lack of robust error handling for unexpected input types.  The `calculateSum` function is designed to sum an array of numbers, but it fails gracefully when given non-numeric input.

The `bug.php` file shows the original code with the error.  The `bugSolution.php` file provides an improved version that addresses the issue.

## Bug Description

The `calculateSum` function doesn't check if the array elements are numeric before adding them. If a non-numeric value is present, PHP will attempt type juggling, resulting in incorrect results or potentially warnings (depending on PHP's error reporting configuration). This makes the function unreliable.

## Solution

The solution is to add input validation to the function to handle cases where non-numeric values are provided.  This ensures the function behaves predictably and avoids unexpected results.