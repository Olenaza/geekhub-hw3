<?php

namespace Thumbimage\Thumbimage\Writer;

interface WriterInterface
{
    /**
     * @param int $height
     * @param int $width
     * @param array $file
     */
    public function writeThumbnail($height, $width, $file);
}
