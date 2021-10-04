<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = 'Luann';
$weather = 'Today is a cloudy day';

// 98.6 is a float because it has a decimal point = without decimal it is an interger
$body_temp = 98.6;

echo $name; // Print to screen/browser 
echo '<br>';

// If you use single quotes around a variable, the value of the variable will not be displayed
echo 'My name is $name';
echo '<br>';
echo '<br>';

// If use double quotes, the variable value will dispaly
echo "My name is $name";
echo '<br>';
echo 'My name is '.$name.'';
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is '.$body_temp.' and all is well!';
echo '<br>';
$name = 'Sharon';
echo $name;
echo '<br>';

// Adding Intergers
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo '<br>';
echo $z;

// Multiple Intergers
$z = $x * $y;
echo '<br>';
echo $z;
echo '<br>';
echo '<br>';

// Continuing w/  name

$first_name = 'Luann';
$last_name = 'Marston';

echo $first_name .''. $last_name; // MUST HAVE single single quites sandwitched b/w periods.
echo '<br>';
echo 'first_name $last_name'; // On professor's recording this appears as an error in VScode
echo '<br>';

echo 'Here are the names with a single quote! '.$first_name .' '. $last_name.' ';  // single ' in a word (single's) won't work here. Use \' (single\'s) instead

/* punctuation challenges - inside subgke quotes, you MUST mext the variable with the following '.$variable.' 
When using an apostraphe, must use ESCAPE before the apostraphe   \ */
echo '<br>';
echo "Here are the names with a doulbe's quote! $first_name $last_name"; // may seem simpler now, NOT later
echo '<br>';
echo '<br>';

//Concatenation
$name = 'Olga ';
$name .= 'Smith'; // the . in front of = joins 'Olga ' and 'Smith'
echo $name;
echo '<br>';
echo '<br>';

// Arithmatic
$x = 120;
$x /= 2; // the / is divide and * is multiple
echo $x;

echo '<br>';
$x = 120;
$x *= .09;
echo $x;
echo '<br>';
echo '<br>';
echo '<br>';

// ----- WEEK 2 VVIDEO #3 -----
// our first function -- number_format()
$x = 137;
$x /= 4;
echo $x; // resutl is 34.25
echo '<br>';
$friendly_x = number_format($x, 1); // function says take $var and use only 1 decimal. Rounds up.
echo $friendly_x;
echo '<br>';

// our second present function -- date function
echo date('Y'); // Year
echo '<br>';
echo date('l'); // Today's day (ie Monday)
echo '<br>';
echo '<br>';

// arrays -- cannon echo an array
$fruit[] = 'orange';  // the [] after the $var makes it an array
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apple';
$fruit[] = 'cherries';

//can echo an indexed array
echo $fruit[3];
echo '<br>';
echo '<br>';


$fruit = array(
  'oragne',
  'banana',
  'grapes',
  'apple',
  'cherries'
);

$fruit = [
  'orange',
  'banana',
  'grapes',
  'apple',
  'cherries',
  'straberries'
];

// CANNOT echo an arry
echo $fruit;
echo '<br>';

print_r($fruit);
echo '<br>';
echo '<br>';
var_dump($fruit); // displays how many var in array, # of char in each var, and location in array
echo '<br>';
echo '<br>';


// another array in the worlk of websites
$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Gallery';

echo $nav[0]; // indexed array
echo '<br>';

// associative array
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

$nav = array(
  'index.php'=> 'Home',
  'about.php'=> 'About',
  'daily.php'=> 'Daily',
  'contact.php'=> 'Contact',
  'gallery.php'=> 'Gallery'

);