<?php
namespace Phpv8\Modules\Shop\Repositories;

use Phpv8\Repositories\CacheAbstractDecorator;
use Phpv8\Services\Cache\CacheInterface;

class CacheDecorator extends CacheAbstractDecorator implements shopInterface
{

    public function __construct(shopInterface $repo, CacheInterface $cache)
    {
        $this->repo = $repo;
        $this->cache = $cache;
    }
}
