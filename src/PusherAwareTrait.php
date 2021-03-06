<?php
declare(strict_types=1);

namespace WyriHaximus\Pusher;

trait PusherAwareTrait
{
    private $pusher;

    public function setPusher(AsyncClient $pusher)
    {
        $this->pusher = $pusher;
    }

    protected function getPusher(): AsyncClient
    {
        return $this->pusher;
    }
}
