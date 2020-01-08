<?php


namespace App\Http\Controllers;


use Hexagonal\Application\Services\Article\CreateArticleCommand;
use Hexagonal\Infrastructure\Bus\Contracts\CommandBus;
use Illuminate\Http\Request;

class ArticleController
{
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function store(Request $request)
    {
        $command = new CreateArticleCommand(
            $request->input('author_id'),
            $request->input('title'),
            $request->input('content')
        );

        $this->commandBus->execute($command);
        return ['result' => 'Article created'];
    }
}
