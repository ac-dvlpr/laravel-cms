<?php

declare(strict_types=1);

namespace Common\Exception;

use Exception;

class PostNotCreatedException extends Exception
{
    public const MESSAGE = 'Post not created.';

    public function __construct()
    {
        parent::__construct(self::MESSAGE, 503);
    }
}