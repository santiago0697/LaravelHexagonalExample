<?php


namespace Hexagonal\Infrastructure\Eloquent;


use App\Article;
use Hexagonal\Domain\ArticleEntity;
use Hexagonal\Domain\ArticleRepository;

class ArticleEloquentRepository implements ArticleRepository
{
    private $model;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function save(ArticleEntity $article): void
    {
        $this->model->create($article);
    }
}
