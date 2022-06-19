<?php
require_once 'tag.php';
require_once 'listItem.php';

class HtmlList extends Tag
{
    private $items = [];

    public function addItem(ListItem $li)
    {
        $this->items[] = $li;
        return $this;
    }

    public function show()
    {
        $result = $this->open();

        foreach ($this->items as $item) {
            $result .= $item->show();
        }

        $result .= $this->close();

        return $result;
    }

    public function __toString()
    {
        $result = $this->open();

        foreach ($this->items as $item) {
            $result .= $item->show();
        }

        $result .= $this->close();

        return $result;
    }
}
