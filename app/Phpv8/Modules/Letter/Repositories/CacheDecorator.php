<?php
namespace Phpv8\Modules\Letter\Repositories;

use Phpv8\Repositories\CacheAbstractDecorator;
use Phpv8\Services\Cache\CacheInterface;

class CacheDecorator extends CacheAbstractDecorator implements letterInterface
{

    public function __construct(letterInterface $repo, CacheInterface $cache)
    {
        $this->repo = $repo;
        $this->cache = $cache;
    }
}
