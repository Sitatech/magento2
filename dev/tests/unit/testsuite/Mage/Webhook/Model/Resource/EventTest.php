<?php
/**
 * Mage_Webhook_Model_Resource_Event
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
 * @category    Mage
 * @package     Mage_Webhook
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Mage_Webhook_Model_Resource_EventTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $tableName = 'webhook_event_table';
        $idFieldName = 'event_id';

        $resourceMock = $this->getMockBuilder('Mage_Core_Model_Resource')
            ->disableOriginalConstructor()
            ->getMock();
        $resourceMock->expects($this->once())
            ->method('getTableName')
            ->with('webhook_event')
            ->will($this->returnValue($tableName));

        $event = new Mage_Webhook_Model_Resource_Event ($resourceMock);
        $this->assertEquals($tableName, $event->getMainTable() );
        $this->assertEquals($idFieldName, $event->getIdFieldName());
    }
}