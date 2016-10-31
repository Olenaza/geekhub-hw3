<?php

namespace Thumbimage\Thumbimage\Writer;

class ImagickImageWriter extends AbstractFileWriter implements WriterInterface
{
    /**
     * {@inheritdoc}
     */
    public function writeThumbnail($height, $width, $file)
    {
        //create new Imagic object
        $image = new Imagick($file['source']);

        //create thumbnail
        $image->thumbnailImage($height, $width, true);

        // Set the image format to jpg
        $image->setImageFormat("jpeg");

        //delete unneeded data to reduce file size
        $image->stripImage();

        $this->writeDataToFile($image);
    }
}
