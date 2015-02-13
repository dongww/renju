<?php
/**
 * User: dongww
 * Date: 2015-2-13
 * Time: 13:10
 */

namespace Dongww\Renju;

use Symfony\Component\Yaml\Parser;

class Config
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function toArray()
    {
        $yaml = new Parser();

        return $yaml->parse(file_get_contents($this->file));
    }
}
