<?php

namespace App;

use Hexagonal\Domain\ArticleEntity;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function create(ArticleEntity $article)
    {
    }
}
