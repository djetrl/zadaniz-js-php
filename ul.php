<?php
require_once 'htmlList.php';

class Ul extends HtmlList
{
    public function show()
    {
        return '<ul>'.parent::show().'</ul>';
    }

    public function __toString()
    {
        return '<ul>'.parent::show().'</ul>';
    }
}
