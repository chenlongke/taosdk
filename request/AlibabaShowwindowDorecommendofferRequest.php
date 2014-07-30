<?php
/**
 * TOP API: alibaba.showwindow.dorecommendoffer request
 * 
 * @author auto create
 * @since 1.0, 2014-03-10 00:00:00
 */
class AlibabaShowwindowDorecommendofferRequest
{
	/** 
	 * 产品ID
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
		return "alibaba.showwindow.dorecommendoffer";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->offerId,"offerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
