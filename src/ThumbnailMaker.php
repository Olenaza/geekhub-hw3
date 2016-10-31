<?php

namespace Thumbimage\Thumbimage;

use Thumbimage\Thumbimage\ImageCollection\ImageCollectionInterface;
use Thumbimage\Thumbimage\Writer\WriterInterface;

class ThumbnailMaker
{
    /**
     * @var ImageCollectionInterface
     */
    private $imageCollection;

    /**
     * @param ImageCollectionInterface $imageCollection
     */
    public function __construct(ImageCollectionInterface $imageCollection)
    {
        $this->imageCollection = $imageCollection;
    }

    /**
     * @param int             $height
     * @param int             $width
     * @param WriterInterface $writer
     */
    public function retrieveThumbnails($height, $width, WriterInterface $writer)
    {
        $files = $this->imageCollection->getImages();
        foreach ($files as $file) {
            $writer->writeThumbnail($height, $width, $file);
        }
    }
}
