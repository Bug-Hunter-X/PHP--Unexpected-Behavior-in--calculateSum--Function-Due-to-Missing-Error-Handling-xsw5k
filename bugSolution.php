```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric input (e.g., log an error, throw an exception, or return an error code)
      trigger_error("Non-numeric value encountered in array: " . $number, E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 'a', 4, 5];
$sum = calculateSum($numbers);
echo "Sum: " . $sum;
```