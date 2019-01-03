<?php

if (random_int(0, 1) === 1) {
    $text = file_get_contents(__DIR__ . '/index.html');
    $search = '/<footer>(.*)<\/footer>/';
    $replace = '<footer>Sidst kontrolleret: ' . (new \DateTime())->format('d-m-Y k\l H:i') . '</footer>';
    file_put_contents(__DIR__ . '/index.html', preg_replace($search, $replace, $text));
}
