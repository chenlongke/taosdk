<?php
/**
 * TOP API: alibaba.showwindow.cancelrecommendoffer request
 * 
 * @author auto create
 * @since 1.0, 2014-03-10 00:00:00
 */
class AlibabaShowwindowCancelrecommendofferRequest
{
	/** 
	 * 商品id
	 **/
	private $offerId;
	
	private $apiParas = array();
	
	public function setOfferId($offerId)
	{
		$this->offerId = $offerId;
		$this->apiParas["offer_id"] = $offerId;
	}

	public function getOfferId()
	{
		return $this->offerId;
	}

	public function getApiMethodName()
	{
		return "alibaba.showwindow.cancelrecommendoffer";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
