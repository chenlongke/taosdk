<?php
/**
 * TOP API: taobao.marketing.promotion.delete request
 * 
 * @author auto create
 * @since 1.0, 2013-11-11 00:00:00
 */
class MarketingPromotionDeleteRequest
{
	/** 
	 * 已设置的优惠策略ID
	 **/
	private $promotionId;
	
	private $apiParas = array();
	
	public function setPromotionId($promotionId)
	{
		$this->promotionId = $promotionId;
		$this->apiParas["promotion_id"] = $promotionId;
	}

	public function getPromotionId()
	{
		return $this->promotionId;
	}

	public function getApiMethodName()
	{
		return "taobao.marketing.promotion.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->promotionId,"promotionId");
		RequestCheckUtil::checkMinValue($this->promotionId,0,"promotionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
