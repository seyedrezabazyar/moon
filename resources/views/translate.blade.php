<?php

use Stichoza\GoogleTranslate\GoogleTranslate;

$tr = new GoogleTranslate('fa'); // Translates into Persian

$text = "Laravel is incredibly scalable. Thanks to the scaling-friendly nature of PHP and Laravel's built-in support for fast, distributed cache systems like Redis, horizontal scaling with Laravel is a breeze. In fact, Laravel applications have been easily scaled to handle hundreds of millions of requests per month.";

echo $text;

echo '<hr>';

echo $tr->translate($text);
