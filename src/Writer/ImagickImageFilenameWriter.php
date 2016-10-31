<?php

namespace Thumbimage\Thumbimage\Writer;

class ImagickImageFilenameWriter implements WriterInterface
{
    /**
     * @var ImagickImageWriter
     */
    private $imagickImageWriter;

    /**
     * @param string $directory
     * @param array  $file
     */
    public function __construct($directory, $file)
    {
        $fileId = $file['id'];
        $fileName = $directory.'/'.$fileId.'_thumbnail.jpg';
        $this->imagickImageWriter = new ImagickImageWriter($fileName);
    }

    /**
     * {@inheritdoc}
     */
    public function writeThumbnail($height, $width, $file)
    {
        $this->imagickImageWriter->writeThumbnail($height, $width, $file);
    }
}
