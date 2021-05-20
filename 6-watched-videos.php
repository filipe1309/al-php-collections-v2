<?php

use Dotr\Video;
use Ds\Map;

require_once 'vendor/autoload.php';

$video1 = new Video('Video 1');
$video2 = new Video('Video 2');
$video3 = new Video('Video 2');

// With Ds\Map

$watchedVideos = new Map();
$watchedVideos->put($video1, new DateTimeImmutable('2021-05-19'));
$watchedVideos->put($video2, new DateTimeImmutable('2021-05-20'));
$watchedVideos->put($video3, new DateTimeImmutable('2021-05-21'));

echo $watchedVideos->get($video1)->format('Y-m-d') . PHP_EOL;
echo $watchedVideos->get($video2)->format('Y-m-d') . PHP_EOL;

foreach ($watchedVideos as $video => $data) {
    echo $data->format('Y-m-d') . PHP_EOL;
    echo $watchedVideos[$video]->format('Y-m-d') . PHP_EOL;
}

$firstWatchedVideo = $watchedVideos->first();
echo $firstWatchedVideo->value->format('Y-m-d') . PHP_EOL;
