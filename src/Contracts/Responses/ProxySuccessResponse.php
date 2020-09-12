<?php
/**
 * Created by PhpStorm.
 * User: fengxin8144
 * Date: 2016/10/25
 * Time: 18:17
 */

namespace fengxin8144\CAS\Contracts\Responses;

interface ProxySuccessResponse extends BaseResponse
{
    /**
     * @param string $ticket
     * @return $this
     */
    public function setProxyTicket($ticket);
}
