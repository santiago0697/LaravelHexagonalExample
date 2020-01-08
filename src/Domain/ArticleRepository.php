<?php


namespace Hexagonal\Domain;


interface ArticleRepository
{
    public function save(ArticleEntity $article): void;
}
