<?php
namespace Phpv8\Modules\Integral\Repositories;

use Phpv8\Repositories\CacheAbstractDecorator;
use Phpv8\Services\Cache\CacheInterface;

class CacheDecorator extends CacheAbstractDecorator implements integralInterface
{

    public function __construct(integralInterface $repo, CacheInterface $cache)
    {
        $this->repo = $repo;
        $this->cache = $cache;
    }
}
