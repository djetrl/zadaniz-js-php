<?php
require_once 'htmlList.php';

class Ol extends HtmlList
{
    public function show()
    {
        return '<ol>'.parent::show().'</ol>';
    }

    public function __toString()
    {
        return '<ol>'.parent::show().'</ol>';
    }
}
