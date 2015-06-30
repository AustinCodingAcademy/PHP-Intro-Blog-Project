
This is some <strong>bold</strong> text.<br>
This is some <em>italic</em> text.<br>

<?php
echo 'hello ACA people!';

echo 45;

echo 45.5678;

echo 'hello ' . 'ACA people!';
?>

<h1>Some more HTML!</h1>
<h2>Smaller...</h2>
<h6>The smallest</h6>

<p>This is a paragraph.</p>
<p>Another paragraph.</p>
<?php
$my_text = 'a string';
echo $my_text;

$my_num = 5;
echo '<br>' . $my_num . '<br>';

// operators that can be used with if:
// < less than
// > greater than
// <= less than or eq
// >= greater than or eq
// == equals
// != does not equal

$rand_num = rand(1, 10);
echo 'The $$$$$ number I found " is ' . $rand_num . '<br>';

echo "With a double quoted \" string: $rand_num<br>";


if($rand_num % 2 == 0) {
  echo 'even';
} else {
  echo 'odd<br>';
}

$k = 0;
while ($k < 10) {
 
  echo "$k<br>";
  $k++;

}

$j = 15;

do {

  $j++;
  echo "$j<br>";

} while($j < 10);

for ($m = 20; $m < 50; $m++) {

  echo "$m<br> ";

}

echo "after the loop m is $m";

?>




















