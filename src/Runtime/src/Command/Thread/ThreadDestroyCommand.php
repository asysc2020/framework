<?php

namespace Kraken\Runtime\Command\Thread;

use Kraken\Runtime\Command\Command;
use Kraken\Runtime\Command\CommandInterface;
use Dazzle\Throwable\Exception\Runtime\RejectionException;

class ThreadDestroyCommand extends Command implements CommandInterface
{
    /**
     * @override
     * @inheritDoc
     */
    protected function command($params = [])
    {
        if (!isset($params['alias']) || !isset($params['flags']))
        {
            throw new RejectionException('Invalid params.');
        }

        return $this->runtime->getManager()->destroyThread($params['alias'], (int)$params['flags']);
    }
}
