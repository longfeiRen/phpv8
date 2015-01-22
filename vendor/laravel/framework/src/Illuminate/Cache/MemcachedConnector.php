<?php namespace Illuminate\Cache;

use Memcached;

class MemcachedConnector {

	/**
	 * Create a new Memcached connection.
	 *
	 * @param  array  $servers
	 * @return \Memcached
	 *
	 * @throws \RuntimeException
	 */
	public function connect(array $servers)
	{
		$memcached = $this->getMemcached();
		// For each server in the array, we'll just extract the configuration and add
		// the server to the Memcached connection. Once we have added all of these
		// servers we'll verify the connection is successful and return it back.
		foreach ($servers as $server)
		{
			$memcached->addServer(
				$server['host'], $server['port'], $server['weight']
			);
		}
		return $memcached;
	}

	/**
	 * Get a new Memcached instance.
	 *
	 * @return \Memcached
	 */
	protected function getMemcached()
	{
		$connect = new Memcached;
		$connect->setOption(Memcached::OPT_COMPRESSION, false);
		$connect->setOption(Memcached::OPT_BINARY_PROTOCOL, true);
		return $connect;
	}

}