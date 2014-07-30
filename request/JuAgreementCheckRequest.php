<?php
/**
 * TOP API: taobao.ju.agreement.check request
 * 
 * @author auto create
 * @since 1.0, 2013-10-16 00:00:00
 */
class JuAgreementCheckRequest
{
	/** 
	 * 商家id
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.agreement.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
