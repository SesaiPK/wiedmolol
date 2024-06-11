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

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

}
