<?php


namespace Hexagonal\Domain;


final class ArticleEntity
{
    private $author_id;
    private $title;
    private $content;

    /**
     * ArticleEntity constructor.
     * @param $author_id
     * @param $title
     * @param $content
     */
    public function __construct($author_id, $title, $content)
    {
        $this->author_id = $author_id;
        $this->setTitle($title);
        $this->setContent($content);
    }

    public function getAuthorId()
    {
        return $this->author_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setTitle(string $title): string
    {
        return $this->title = ucfirst($title);
    }

    public function setContent(string $content): string
    {
        return $this->content = $this->filterWords($content);
    }

    public function filterWords(string $text)
    {
        return $text;
    }
}
