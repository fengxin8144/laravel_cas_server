<?php
/**
 * Created by PhpStorm.
 * User: fengxin8144
 * Date: 2016/10/23
 * Time: 16:20
 */

namespace fengxin8144\CAS\Contracts\Responses;

use Symfony\Component\HttpFoundation\Response;

interface BaseResponse
{
    /**
     * @return Response
     */
    public function toResponse();
}
