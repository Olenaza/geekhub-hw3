<?php

namespace Thumbimage\Thumbimage\Writer;

abstract class AbstractFileWriter
{
    /**
     * @var string
     */
    private $fileName;

    /**
     * @param string $fileName
     */
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @param object $image
     */
    protected function writeDataToFile($image)
    {
        file_put_contents($this->fileName, $image);
    }
}
