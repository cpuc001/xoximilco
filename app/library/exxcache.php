<?php

/**
 * User: jmaldonado
 * Date: 14/10/16
 * Time: 10:47 AM
 */
use Phalcon\Cache\Frontend\Data as FrontData;
use Phalcon\Cache\Backend\Libmemcached as BackMemCached;

class ExxCache
{
    const LIFETIME = 3600; // Cache de datos por una hora
    protected $frontCache;
    protected $cache;

    function __construct(){
        $this->frontCache = new FrontData(
            [
                "lifetime" => self::LIFETIME
            ]
        );
        $this->cache = new BackMemCached(
            $this->frontCache,
            [
                "servers" => [
                        ["127.0.0.1","11211","1"]
                 ],
                 "statsKey" => "_PHCM"
            ]
        );
    }

    public function getData($key)
    {
        return $this->cache->get($key);
    }

    public function setData($key, $value)
    {
        $this->cache->save($key,$value);
    }

    public function deleteData($key)
    {
       $this->cache->delete($key);
    }

    public function existData($key){
        return $this->cache->exists($key);
    }

    public function clearCache()
    {
        $keys = $this->cache->queryKeys();
        foreach ($keys as $key) {
            $this->cache->delete($key);
        }
    }
}