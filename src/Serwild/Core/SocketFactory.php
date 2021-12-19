<?php
declare(strict_types=1);

namespace Ferror\Serwild\Core;

final class SocketFactory
{
    public function tcp(): \Socket
    {
        return socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    }

    public function udp(): \Socket
    {
        return socket_create(AF_INET, SOCK_STREAM, SOL_UDP);
    }
}
