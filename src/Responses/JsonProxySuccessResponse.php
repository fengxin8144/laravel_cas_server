<?php
/**
 * Created by PhpStorm.
 * User: fengxin8144
 * Date: 2016/10/25
 * Time: 18:19
 */

namespace fengxin8144\CAS\Responses;

use fengxin8144\CAS\Contracts\Responses\ProxySuccessResponse;

class JsonProxySuccessResponse extends BaseJsonResponse implements ProxySuccessResponse
{
    /**
     * JsonProxySuccessResponse constructor.
     */
    public function __construct()
    {
        $this->data = ['serviceResponse' => ['proxySuccess' => []]];
    }

    public function setProxyTicket($ticket)
    {
        $this->data['serviceResponse']['proxySuccess']['proxyTicket'] = $ticket;
    }
}
