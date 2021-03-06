<?php
/**
 * PHP Unit test suite for Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   EcomDev
 * @package    EcomDev_PHPUnit
 * @copyright  Copyright (c) 2013 EcomDev BV (http://www.ecomdev.org)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Ivan Chepurnyi <ivan.chepurnyi@ecomdev.org>
 */

/**
 * Interface for request object, that will be asserted
 *
 */
interface EcomDev_PHPUnit_Controller_Request_Interface
{
    /**
     * Returns current route name
     *
     * @return string
     */
    public function getRouteName();

    /**
     * Returns current controller name
     *
     * @return string
     */
    public function getControllerName();

    /**
     * Returns current controller module
     *
     * @return string
     */
    public function getControllerModule();

    /**
     * Returns current controller action name
     *
     * @return string
     */
    public function getActionName();

    /**
     * Retrieve property's value which was before forward call.
     *
     * @param string $name
     * @return array|string|null
     */
    public function getBeforeForwardInfo($name = null);

    /**
     * Check whether request was dispatched
     *
     */
    public function isDispatched();
}