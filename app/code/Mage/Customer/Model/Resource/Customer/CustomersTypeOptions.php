<?php
/**
 * Customer type option array
 *
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Mage_Customer_Model_Resource_Customer_CustomersTypeOptions implements Mage_Core_Model_Option_ArrayInterface
{
    /**
     * @var Mage_Customer_Helper_Data
     */
    protected $_helper;

    /**
     * @param Mage_Customer_Helper_Data $customerHelper
     */
    public function __construct(Mage_Customer_Helper_Data $customerHelper)
    {
        $this->_helper = $customerHelper;
    }

    /**
     * Return statuses option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            Mage_Log_Model_Visitor::VISITOR_TYPE_CUSTOMER  => $this->_helper->__('Customer'),
            Mage_Log_Model_Visitor::VISITOR_TYPE_VISITOR => $this->_helper->__('Visitor'),
        );
    }
}
