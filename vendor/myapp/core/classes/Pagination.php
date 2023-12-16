<?php

namespace myapp;

class Pagination
{
    public $count_pages = 1;
    public $current_page = 1;
    public $page = 10;
    public $per_page = 10;
    public $total = 10;

    public function __construct($page = 1, $per_page = 1, $total = 1)
    {
        $this->page = $page;
        $this->per_page = $per_page;
        $this->total = $total;
        $this->count_pages = $this->getCountPages();
        $this->current_page = $this->getCurrentPage();
    }

    private function getCountPages():int
    {
        return ceil($this->total / $this->per_page) ?: 1;
    }

    private function getCurrentPage()
    {
        if ($this->page < 1) {
            $this->page = 1;
        }
        if ($this->page > $this->count_pages) {
            $this->page = $this->count_pages;
        }
        return $this->page;
    }

    public function getStart()
    {
        return ($this->current_page - 1) * $this->per_page;
    }

    public function getHtml()
    {
        for ($i = 1; $i <= ($this->count_pages); $i++) {
            echo "<li class='page-item'><a class='page-link' href='?page={$i}'>{$i}</a></li>";
        }
    }
}