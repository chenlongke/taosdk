<?php
/**
 * TOP API: taobao.koubei.coupon.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class KoubeiCouponGetRequest
{
	/** 
	 * 优惠券的id
	 **/
	private $couponId;
	
	private $apiParas = array();
	
	public function setCouponId($couponId)
	{
		$this->couponId = $couponId;
		$this->apiParas["coupon_id"] = $couponId;
	}

	public function getCouponId()
	{
		return $this->couponId;
	}

	public function getApiMethodName()
	{
		return "taobao.koubei.coupon.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->couponId,"couponId");
		RequestCheckUtil::checkMaxLength($this->couponId,17,"couponId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
