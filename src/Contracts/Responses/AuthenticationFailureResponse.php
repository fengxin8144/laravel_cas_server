<?php
/**
 * Created by PhpStorm.
 * User: fengxin8144
 * Date: 2016/10/23
 * Time: 16:19
 */

namespace fengxin8144\CAS\Contracts\Responses;

interface AuthenticationFailureResponse extends BaseResponse
{
    /**
     * @param string $code
     * @param string $description
     * @return $this
     */
    public function setFailure($code, $description);
}
