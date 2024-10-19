<?php
// Sample string
$text = "There are 5 apples, 3 bananas, and 10 oranges in the basket.";

// Regular expression to find all digits
$pattern = '/\d+/';

// Use preg_replace to replace digits with '[number]'
$replacedText = preg_replace($pattern, '[number]', $text);

// Output the modified string
echo "Original text: $text<br>";
echo "Modified text: $replacedText<br>";
?>
