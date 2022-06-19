<?php
require_once 'tag.php';

class Textarea extends Tag
{
    public function __construct()
    {
        parent::__construct('textarea');
    }
}