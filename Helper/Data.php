<?php
/***
 * Copyright © ScriptLodgePro LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.scriptlodge.com | matinict@gmail.com
 **/

namespace ScriptLodgePro\GuestCouponManager\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_ACTIVE = 'scriptlodgepro_checkout/guestcouponmanager/active';

    /**
     * Is active
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_ACTIVE, ScopeInterface::SCOPE_STORE);
    }
}
