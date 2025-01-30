# PHP Array Calculation Bug

This repository demonstrates a bug in a PHP script designed to calculate the sum of values in an array.  The script handles empty arrays correctly but produces unexpected results when encountering `null` values within the array.

The `bug.php` file contains the erroneous code.  The `bugSolution.php` provides a corrected version demonstrating proper null handling.

This bug highlights the importance of robust error handling and input validation when working with arrays in PHP.  It serves as an example of how seemingly minor issues can lead to unexpected and incorrect results.