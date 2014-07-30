<?php
/**
 * TOP API: taobao.chaoshi.order.update request
 * 
 * @author auto create
 * @since 1.0, 2011-07-27 00:00:00
 */
class ChaoshiOrderUpdateRequest
{
	/** 
	 * 收货地址ID
	 **/
	private $addressId;
	
	/** 
	 * 主订单ID
	 **/
	private $bizOrderId;
	
	/** 
	 * 发票抬头
	 **/
	private $novice;
	
	/** 
	 * 发票内容
	 **/
	private $noviceContent;
	
	private $apiParas = array();
	
	public function setAddressId($addressId)
	{
		$this->addressId = $addressId;
		$this->apiParas["address_id"] = $addressId;
	}

	public function getAddressId()
	{
		return $this->addressId;
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

	public function setNovice($novice)
	{
		$this->novice = $novice;
		$this->apiParas["novice"] = $novice;
	}

	public function getNovice()
	{
		return $this->novice;
	}

	public function setNoviceContent($noviceContent)
	{
		$this->noviceContent = $noviceContent;
		$this->apiParas["novice_content"] = $noviceContent;
	}

	public function getNoviceContent()
	{
		return $this->noviceContent;
	}

	public function getApiMethodName()
	{
		return "taobao.chaoshi.order.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->addressId,"addressId");
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->noviceContent,"noviceContent");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
