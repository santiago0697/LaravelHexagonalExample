<?php


namespace Hexagonal\Infrastructure\Bus;


use Hexagonal\Application\Contracts\Command;
use Hexagonal\Infrastructure\Bus\Contracts\CommandBus;
use Hexagonal\Infrastructure\Bus\Contracts\Container;

class SimpleCommandBus implements CommandBus
{
    private const COMMAND_PREFIX = 'Command';
    private const HANDLER_PREFIX = 'CommandHandler';

    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function execute($command)
    {
        return $this->resolveHandler($command)->__invoke($command);
    }

    private function resolveHandler(Command $command)
    {
        return $this->container->make($this->getHandlerClass($command));
    }

    private function getHandlerClass(Command $command)
    {
        return str_replace(
            self::COMMAND_PREFIX,
            self::HANDLER_PREFIX,
            get_class($command)
        );
    }

}
