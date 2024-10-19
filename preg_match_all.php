<?php
// Sample string
$text = "Apple and apricot are delicious fruits, and avocados are healthy.";

// Regular expression to find words starting with 'a'
$pattern = '/\b[aA]\w*/';

// Use preg_match_all to find all matches
preg_match_all($pattern, $text, $matches);

// Output all matches found
echo "Words starting with 'a':<br>";
foreach ($matches[0] as $match) {
    echo $match . "<br>";
}
?>
