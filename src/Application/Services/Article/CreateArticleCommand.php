<?php


namespace Hexagonal\Application\Services\Article;


use Hexagonal\Application\Contracts\Command;

final class CreateArticleCommand implements Command
{
    private $author_id;
    private $title;
    private $content;

    public function __construct(int $author_id, string $title, string $content)
    {
        $this->author_id = $author_id;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->author_id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
