<?php
namespace Phpv8\Modules\Video\Repositories;

use Phpv8\Repositories\CacheAbstractDecorator;
use Phpv8\Services\Cache\CacheInterface;

class CacheDecorator extends CacheAbstractDecorator implements videoInterface
{

    public function __construct(videoInterface $repo, CacheInterface $cache)
    {
        $this->repo = $repo;
        $this->cache = $cache;
    }
}
