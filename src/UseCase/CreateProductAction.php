<?php
declare(strict_types=1);

namespace Ferror\UseCase;

use Ferror\Serwild\Core\Action;
use Ferror\Serwild\Core\Input;
use Ferror\Serwild\Core\Output;

final class CreateProductAction implements Action
{
    public function getAction(): string
    {
        return 'product:create';
    }

    public function __invoke(Input $input): Output
    {


        return new Output();
    }
}
