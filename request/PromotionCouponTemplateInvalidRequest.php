<?php
/**
 * TOP API: taobao.promotion.coupon.template.invalid request
 * 
 * @author auto create
 * @since 1.0, 2014-02-26 00:00:00
 */
class PromotionCouponTemplateInvalidRequest
{
	/** 
	 * 外部卡券的标识id
	 **/
	private $outCouponId;
	
	/** 
	 * 外部券类型
	 **/
	private $outCouponType;
	
	private $apiParas = array();
	
	public function setOutCouponId($outCouponId)
	{
		$this->outCouponId = $outCouponId;
		$this->apiParas["out_coupon_id"] = $outCouponId;
	}

	public function getOutCouponId()
	{
		return $this->outCouponId;
	}

	public function setOutCouponType($outCouponType)
	{
		$this->outCouponType = $outCouponType;
		$this->apiParas["out_coupon_type"] = $outCouponType;
	}

	public function getOutCouponType()
	{
		return $this->outCouponType;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.coupon.template.invalid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outCouponId,"outCouponId");
		RequestCheckUtil::checkNotNull($this->outCouponType,"outCouponType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
