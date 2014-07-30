<?php
/**
 * TOP API: alibaba.offer.offermodel.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-04 00:00:00
 */
class AlibabaOfferOffermodelGetRequest
{
	/** 
	 * 会员id
	 **/
	private $memberId;
	
	/** 
	 * offerId
	 **/
	private $offerId;
	
	private $apiParas = array();
	
	public function setMemberId($memberId)
	{
		$this->memberId = $memberId;
		$this->apiParas["member_id"] = $memberId;
	}

	public function getMemberId()
	{
		return $this->memberId;
	}

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
		return "alibaba.offer.offermodel.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->memberId,"memberId");
		RequestCheckUtil::checkNotNull($this->offerId,"offerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
