<?php

namespace Lindelius\JWT\Tests\JWT;

use Lindelius\JWT\JWT;

/**
 * Class LeewayJWT
 */
class LeewayJWT extends JWT
{
    /**
     * Leeway time (in seconds) to account for clock skew.
     *
     * @var int
     */
    protected static $leeway = 90;
}
