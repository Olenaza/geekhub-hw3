<?php

require_once __DIR__.'/vendor/autoload.php';

$imageCollection = new \Thumbimage\Thumbimage\ImageCollection\ImageFromDB('host', 'user', 'pass', 'db', 'table', 'column');
$thumbnailMaker = new \Thumbimage\Thumbimage\ThumbnailMaker($imageCollection);
$thumbnailMaker->retrieveThumbnails('height', 'width', new \Thumbimage\Thumbimage\Writer\ImagickImageWriter(__DIR__));
$thumbnailMaker->retrieveThumbnails('height', 'width', new \Thumbimage\Thumbimage\Writer\ImagickImageFilenameWriter(__DIR__));
