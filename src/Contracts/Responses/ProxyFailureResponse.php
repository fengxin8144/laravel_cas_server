<?php
/**
 * Created by PhpStorm.
 * User: fengxin8144
 * Date: 2016/10/25
 * Time: 17:48
 */

namespace fengxin8144\CAS\Contracts\Responses;

interface ProxyFailureResponse extends BaseResponse
{
    /**
     * @param string $code
     * @param string $description
     * @return $this
     */
    public function setFailure($code, $description);
}
