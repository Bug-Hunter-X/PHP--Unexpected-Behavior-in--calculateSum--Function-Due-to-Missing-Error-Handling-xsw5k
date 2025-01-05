```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
    // Missing error handling for non-numeric values
  }
  return $sum;
}

$numbers = [1, 2, 'a', 4, 5];
$sum = calculateSum($numbers);
echo "Sum: " . $sum;
```