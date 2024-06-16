<?php

class Post
{
    private $title;
    private $content;
    private $authorName;

    public function __construct($title, $content, $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->authorName = $author;
    }

    public function getAuthorName(): string
    {
        return $this->authorName;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

}
