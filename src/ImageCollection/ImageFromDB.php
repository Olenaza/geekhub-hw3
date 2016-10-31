<?php

namespace Thumbimage\Thumbimage\ImageCollection;

class ImageFromDB implements ImageCollectionInterface
{
    /**
     * @var string
     */
    private $host;
    private $user;
    private $pass;
    private $db;
    private $table;
    private $column;

    /**
     * @param string $host
     * @param string $user
     * @param string $pass
     * @param string $db
     * @param string $table
     * @param string $column
     */
    public function __construct($host, $user, $pass, $db, $table, $column)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->table = $table;
        $this->column = $column;
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        /*
         * Connect to a database using $this->host, $this->user, $this->pass, $this->db
         * and retrieve images data from $this->table
         * to the array of associative arrays with two key => value pairs:
         * 'id' => ImageId, 'source' => path/to/file or url from $this->column
         */
        return array();
    }
}
