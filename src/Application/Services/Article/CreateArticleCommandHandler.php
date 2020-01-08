<?php


namespace Hexagonal\Application\Services\Article;


use Hexagonal\Application\Contracts\CommandHandler;
use Hexagonal\Domain\ArticleEntity;
use Hexagonal\Domain\ArticleRepository;

class CreateArticleCommandHandler implements CommandHandler
{
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($command)
    {
        $article = new ArticleEntity(
            $command->getAuthorId(),
            $command->getTitle(),
            $command->getContent()
        );

        $this->repository->save($article);
    }
}
