<?php

if (random_int(0, 1) === 1) {
    $text = file_get_contents(__DIR__ . '/index.html');
    $search = '/[^<footer>](.*)[^<\/footer>]/';
    $replace = 'Sidst kontrolleret: ' . (new \DateTime())->format('d-m-Y kl H:i');
    file_put_contents(__DIR__ . '/index.html', preg_replace($search, $replace, $text));
    `git commit -am "Updated"`;
    `git push`;
    echo 'Updated';
}
