<?php
declare(strict_types=1);

namespace Ferror\Serwild\Core;

use Ferror\UseCase\CreateProductAction;

final class Application
{
    private array $actions;
    private DependencyInjection $dependencies;

    public function __construct()
    {
        $action = new CreateProductAction();

        $this->actions[$action->getAction()] = $action;
        $this->dependencies = new DependencyInjection();
    }

    public function start(): void
    {
        //register all use case actions
        //@todo create DI
        //create input based on plugin
        $input = new Input();

        var_dump($GLOBALS['_GET']);
        var_dump($GLOBALS['_POST']);

        /**
         * @var \Ferror\Serwild\Core\SocketFactory $socketFactory
         */
        $socketFactory = $this->dependencies->get('factory');
        $socket = $socketFactory->tcp();

        socket_bind($socket, '192.168.1.2', 22);
        socket_listen($socket);

        $msgsock = socket_accept($socket);

        while (true) {
            $buf = socket_read($msgsock, 2048, PHP_NORMAL_READ);

            if ($buf === 'close') {
                socket_close($socket);
            }

            var_dump($buf);

            socket_write($msgsock, 'asd', 3);
        }


//        socket_close($socket);
        //run action
//        $this->actions[$input->get('action', new InputType(InputType::STRING))]();
        //create output
        //present result
    }
}
