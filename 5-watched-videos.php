<?php

use Dotr\Video;

require_once 'vendor/autoload.php';

$video1 = new Video('Video 1');
$video2 = new Video('Video 2');

$watchedVideos = [
    spl_object_hash($video1) => new DateTimeImmutable('2021-05-19'),
    spl_object_hash($video2) => new DateTimeImmutable('2021-05-20')
];

echo $watchedVideos[spl_object_hash($video1)]->format('Y-m-d') . PHP_EOL;
