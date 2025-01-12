function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )

// The problem is that the foreach loop modifies the array while it is being iterated.
//This can lead to unexpected behavior because the key index may shift as the elements are removed.
// A better approach is to use array_filter to avoid this.