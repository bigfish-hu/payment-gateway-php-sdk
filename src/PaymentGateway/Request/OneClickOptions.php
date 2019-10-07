<?php
/**
 * BIG FISH Payment Gateway (https://www.paymentgateway.hu)
 * PHP SDK
 * 
 * @link https://github.com/bigfish-hu/payment-gateway-php-sdk.git
 * @copyright (c) 2015, BIG FISH Internet-technology Ltd. (http://bigfish.hu)
 */
namespace BigFish\PaymentGateway\Request;

use BigFish\PaymentGateway;

/**
 * One click payment options request class
 * 
 * @package PaymentGateway
 * @subpackage Request
 */
class OneClickOptions extends RequestAbstract
{
	/**
	 * Store name
	 * 
	 * @var string
	 * @access public
	 */
	public $storeName;

	/**
	 * Provider name
	 * 
	 * @var string
	 * @access public 
	 */
	public $providerName;

	/**
	 * User identifier
	 * 
	 * @var string
	 * @access public 
	 */
	public $userId;

	/**
	 * Construct new One Click Options request instance
	 *
	 * @param string $providerName Provider name
	 * @param string $userId User identifier
	 * @throws \BigFish\PaymentGateway\Exception
	 * @return void
	 * @access public
	 */
	public function __construct($providerName, $userId)
	{
		$this->storeName = PaymentGateway::getConfig()->storeName;
		$this->providerName = $providerName;
		$this->userId = $userId;
	}

}
