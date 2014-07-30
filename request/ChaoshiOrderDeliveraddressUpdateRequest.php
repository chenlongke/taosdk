<?php
/**
 * TOP API: taobao.chaoshi.order.deliveraddress.update request
 * 
 * @author auto create
 * @since 1.0, 2013-08-26 00:00:00
 */
class ChaoshiOrderDeliveraddressUpdateRequest
{
	/** 
	 * 收货地址中的详细地址（街道什么的）
	 **/
	private $addressDetail;
	
	/** 
	 * 收货地址中的区
	 **/
	private $area;
	
	/** 
	 * 交易订单的订单Id
	 **/
	private $bizOrderId;
	
	/** 
	 * 收货地址中的市
	 **/
	private $city;
	
	/** 
	 * 收货地址中收货人信息
	 **/
	private $fullName;
	
	/** 
	 * 收货地址中说活人手机号码
	 **/
	private $mobile;
	
	/** 
	 * 收货地址中的固定电话
	 **/
	private $phone;
	
	/** 
	 * 邮政编码
	 **/
	private $postCode;
	
	/** 
	 * 收货地址中的省份
	 **/
	private $province;
	
	private $apiParas = array();
	
	public function setAddressDetail($addressDetail)
	{
		$this->addressDetail = $addressDetail;
		$this->apiParas["address_detail"] = $addressDetail;
	}

	public function getAddressDetail()
	{
		return $this->addressDetail;
	}

	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setFullName($fullName)
	{
		$this->fullName = $fullName;
		$this->apiParas["full_name"] = $fullName;
	}

	public function getFullName()
	{
		return $this->fullName;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setPostCode($postCode)
	{
		$this->postCode = $postCode;
		$this->apiParas["post_code"] = $postCode;
	}

	public function getPostCode()
	{
		return $this->postCode;
	}

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function getApiMethodName()
	{
		return "taobao.chaoshi.order.deliveraddress.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->addressDetail,"addressDetail");
		RequestCheckUtil::checkNotNull($this->area,"area");
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkMinValue($this->bizOrderId,0,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkNotNull($this->fullName,"fullName");
		RequestCheckUtil::checkNotNull($this->mobile,"mobile");
		RequestCheckUtil::checkNotNull($this->postCode,"postCode");
		RequestCheckUtil::checkNotNull($this->province,"province");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
