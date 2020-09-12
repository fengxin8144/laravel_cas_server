<?php
/**
 * Created by PhpStorm.
 * User: fengxin8144
 * Date: 2016/10/23
 * Time: 15:57
 */

namespace fengxin8144\CAS\Responses;

use fengxin8144\CAS\Contracts\Responses\AuthenticationSuccessResponse;

class JsonAuthenticationSuccessResponse extends BaseJsonResponse implements AuthenticationSuccessResponse
{
    /**
     * JsonAuthenticationSuccessResponse constructor.
     */
    public function __construct()
    {
        $this->data = ['code' => 'SUCCESS'];
    }

    public function setUser($user)
    {
        $this->data['user'] = $user;

        return $this;
    }

    public function setProxies($proxies)
    {
        $this->data['proxies'] = $proxies;

        return $this;
    }

    public function setAttributes($attributes)
    {
        $this->data['user_info'] = $attributes;

        return $this;
    }

    public function setProxyGrantingTicket($ticket)
    {
        $this->data['proxyGrantingTicket'] = $ticket;

        return $this;
    }
}
