<?php
/**
 * Created by PhpStorm.
 * User: fengxin8144
 * Date: 2016/10/23
 * Time: 16:23
 */

namespace fengxin8144\CAS\Responses;

use fengxin8144\CAS\Contracts\Responses\AuthenticationFailureResponse;

class JsonAuthenticationFailureResponse extends BaseJsonResponse implements AuthenticationFailureResponse
{
    /**
     * JsonAuthenticationFailureResponse constructor.
     */
    public function __construct()
    {
//        $this->data = ['serviceResponse' => ['authenticationFailure' => []]];
    }

    /**
     * @param string $code
     * @param string $description
     * @return $this
     */
    public function setFailure($code, $description)
    {
        $this->data['code']        = $code;
        $this->data['msg'] = $description;

        return $this;
    }
}
