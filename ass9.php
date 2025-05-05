<?php
$fruits = array("Apple", "Banana", "Cherry");

array_push($fruits, "Mango", "Orange");

echo "<h3>Fruits List:</h3>";
print_r($fruits);

echo "<p>Total fruits: " . count($fruits) . "</p>";

$search = "Banana";
if (in_array($search, $fruits)) {
    echo "<p>$search is in the list.</p>";
} else {
    echo "<p>$search is not in the list.</p>";
}

sort($fruits);
echo "<h4>Sorted Fruits:</h4>";
print_r($fruits);

$last = array_pop($fruits);
echo "<p>Removed last fruit: $last</p>";

$student = array(
    "name" => "John",
    "age" => 21,
    "grade" => "A"
);

echo "<h4>Student Details:</h4>";
foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}

$vegetables = array("Carrot", "Broccoli");
$grocery = array_merge($fruits, $vegetables);
echo "<h4>Combined Grocery List:</h4>";
print_r($grocery);

$someFruits = array_slice($fruits, 1, 2);
echo "<h4>Sliced Fruits:</h4>";
print_r($someFruits);
?>
