<?php
namespace Phpv8\Modules\Classify\Repositories;

use Phpv8\Repositories\CacheAbstractDecorator;
use Phpv8\Services\Cache\CacheInterface;

class CacheDecorator extends CacheAbstractDecorator implements classifyInterface
{

    public function __construct(classifyInterface $repo, CacheInterface $cache)
    {
        $this->repo = $repo;
        $this->cache = $cache;
    }
}
