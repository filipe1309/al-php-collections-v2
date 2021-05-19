<?php

use Dotr\Video;

require_once 'vendor/autoload.php';

$video1 = new Video('Video 1');
$video2 = new Video('Video 2');

// With spl_object_hash

$watchedVideos = [
    spl_object_hash($video1) => new DateTimeImmutable('2021-05-19'),
    spl_object_hash($video2) => new DateTimeImmutable('2021-05-20')
];

echo spl_object_hash($video1) . PHP_EOL;
echo $watchedVideos[spl_object_hash($video1)]->format('Y-m-d') . PHP_EOL;

// With SplObjectStorage

$watchedVideos = new SplObjectStorage();
$watchedVideos->attach($video1, new DateTimeImmutable('2021-05-19'));
$watchedVideos[$video2] = new DateTimeImmutable('2021-05-20');

echo $watchedVideos[$video1]->format('Y-m-d') . PHP_EOL;
echo $watchedVideos[$video2]->format('Y-m-d') . PHP_EOL;

foreach ($watchedVideos as $video) {
    echo $video->title . PHP_EOL;
    echo $watchedVideos[$video]->format('Y-m-d') . PHP_EOL;
}
