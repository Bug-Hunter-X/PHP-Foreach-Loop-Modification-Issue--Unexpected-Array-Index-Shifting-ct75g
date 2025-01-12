function foo(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'a';
  });
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )

// array_filter creates a new array containing only the elements that satisfy the given condition.
//This avoids modifying the array during iteration and prevents unexpected behavior related to index shifting.