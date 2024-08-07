<?php
/**
 * BIG FISH Payment Gateway (https://www.paymentgateway.hu)
 * PHP SDK
 * 
 * @link https://github.com/pmgw-hu/payment-gateway-php-sdk.git
 * @copyright (c) 2024, BIG FISH Payment Services Ltd.
 */
namespace BigFish\PaymentGateway\Request;

/**
 * Finalize request class
 * 
 * @package PaymentGateway
 * @subpackage Request
 */
class Finalize extends RequestAbstract
{
	/**
	 * Payment Gateway transaction ID
	 * 
	 * @var string
	 * @access public
	 */
	public $transactionId;

	/**
	 * Finalize amount
	 * 
	 * @var float
	 * @access public
	 */
	public $amount;

	/**
	 * Construct new Finalize request instance
	 * 
	 * @param string $transactionId Transaction ID received from Payment Gateway
	 * @param float $amount Amount to finalize
	 * @return void
	 * @access public
	 */
	public function __construct($transactionId, $amount)
	{
		$this->transactionId = $transactionId;
		$this->amount = (float)$amount;
	}

	/**
	 * Get object parameters
	 * 
	 * @return string
	 * @access public
	 * @throws \BigFish\PaymentGateway\Exception
	 */
	public function getParams()
	{
		unset($this->responseMode);
		return parent::getParams();
	}

}