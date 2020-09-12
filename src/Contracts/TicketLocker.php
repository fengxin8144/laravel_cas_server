<?php
/**
 * Created by PhpStorm.
 * User: fengxin8144
 * Date: 16/9/20
 * Time: 12:40
 */

namespace fengxin8144\CAS\Contracts;

interface TicketLocker
{
    /**
     * @param string $key
     * @param int    $timeout
     * @return bool
     */
    public function acquireLock($key, $timeout);

    /**
     * @param string $key
     * @return bool
     */
    public function releaseLock($key);
}
