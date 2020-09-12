<?php
/**
 * Created by PhpStorm.
 * User: fengxin8144
 * Date: 2016/10/23
 * Time: 16:25
 */

namespace fengxin8144\CAS\Responses;

use fengxin8144\CAS\Contracts\Responses\AuthenticationFailureResponse;

class XmlAuthenticationFailureResponse extends BaseXmlResponse implements AuthenticationFailureResponse
{
    /**
     * @param string $code
     * @param string $description
     * @return $this
     */
    public function setFailure($code, $description)
    {
        $this->removeByXPath($this->node, 'cas:authenticationFailure');
        $authNode = $this->node->addChild('cas:authenticationFailure', $description);
        $authNode->addAttribute('code', $code);

        return $this;
    }
}
