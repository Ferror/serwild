<?php
declare(strict_types=1);

namespace Ferror\Serwild\Core;

final class DependencyInjection
{
    private array $services;

    public function __construct()
    {
        $this->services = [
            'factory' => new SocketFactory(),
            'actions' => []
        ];
    }

    public function get(string $name): object
    {
        return $this->services[$name];
    }
}
