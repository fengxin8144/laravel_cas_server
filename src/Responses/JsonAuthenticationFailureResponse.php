<?php
/**
 * Created by PhpStorm.
 * User: leo108
 * Date: 2016/10/23
 * Time: 16:23
 */

namespace Leo108\CAS\Responses;

use Leo108\CAS\Contracts\Responses\AuthenticationFailureResponse;

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
