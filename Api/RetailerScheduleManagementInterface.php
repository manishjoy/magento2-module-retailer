<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\Retailer
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Smile\Retailer\Api;

/**
 * Schedule Management class.
 * Globally handles modifications of retailers schedule (opening hours, special opening hours, pickup hours, etc ...)
 *
 * @category Smile
 * @package  Smile\Retailer
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
interface RetailerScheduleManagementInterface
{
    /**
     * Save Opening Hours for a given retailer
     *
     * @param \Smile\Seller\Api\Data\SellerInterface $retailer The retailer
     *
     * @return \Smile\Seller\Api\Data\SellerInterface
     */
    public function saveOpeningHours(\Smile\Seller\Api\Data\SellerInterface $retailer);

    /**
     * Load Opening Hours for a given retailer
     *
     * @param \Smile\Seller\Api\Data\SellerInterface $retailer The retailer
     *
     * @return \Smile\Seller\Api\Data\SellerInterface
     */
    public function loadOpeningHours(\Smile\Seller\Api\Data\SellerInterface $retailer);

    /**
     * Load Special Opening Hours for a given retailer
     *
     * @param \Smile\Seller\Api\Data\SellerInterface $retailer The retailer
     *
     * @return \Smile\Seller\Api\Data\SellerInterface
     */
    public function loadSpecialOpeningHours(\Smile\Seller\Api\Data\SellerInterface $retailer);

    /**
     * Save Special Opening Hours for a given retailer
     *
     * @param \Smile\Seller\Api\Data\SellerInterface $retailer The retailer
     *
     * @return \Smile\Seller\Api\Data\SellerInterface
     */
    public function saveSpecialOpeningHours(\Smile\Seller\Api\Data\SellerInterface $retailer);
}
