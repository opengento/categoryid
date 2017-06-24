<?php
/**
 * This file is part of Opengento_Categoryid for Magento.
 *
 * @license MIT
 * @author Adrien Louis-Rossignol
 * @category Opengento
 * @package Opengento_Categoryid
 * @copyright Copyright (c) 2017 Opengento (https://www.opengento.fr/)
 */

/**
 * Data Helper
 * @package Opengento_Categoryid
 */
class Opengento_Categoryid_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Is enabled config path
     * @var string
     */
    const IS_ENABLED_CONFIG_PATH = 'opengento_categoryid/configuration/enabled';

    /**
     * Check if module is enabled
     *
     * @return mixed
     */
    public function isEnabled()
    {
        return Mage::getStoreConfigFlag(static::IS_ENABLED_CONFIG_PATH);
    }
}
