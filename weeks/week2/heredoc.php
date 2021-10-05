<?php
// using the heredoc!
//Gives the ability to input text that may need many quotes or lots of written content



$book = 'Harry Potter';
$author = 'J. K. Rowling';
$charcter = 'Harry Potter';
$actor = 'Daniel Radcliffe';

// Using here doc 
$content_here= <<<HARRY
My favoriate book is $book, written by $author, and is a major mostion picture movie. Harry Potter fans want more! 

$actor's rendition as $character is perfect!
HARRY;

// Without here doc
$content_nohere = 
'My favoriate book is '.$book.', written by '.$author.', and is a major mostion picture movie. Harry Potter fans want more! 

'.$actor.'\'s rendition as '.$character.' is perfect!';


echo $content_here;
echo '</br/>';
echo '</br/>';
echo $content_nohere;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);