<?php
/**
 * TOP API: taobao.warehouse.outside.order.import request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseOutsideOrderImportRequest
{
	/** 
	 * 自动发货标识,ENABLED(已废弃)和DISABLED(不采用自动发货),默认为DISABLED
	 **/
	private $autoConsign;
	
	/** 
	 * json格式的货物列表，形式如：{"goods_list":[{"goods_name":"name","single_price":"100","goods_quantity":"10","outer_id":"abcd"},{"goods_name":"name1","single_price":"101","goods_quantity":"11","outer_id":"abcd1"}]}其中只有outer_id是可选的，outer_id可以根据接口taobao.warehouse.items.get得到
	 **/
	private $goodsListJson;
	
	/** 
	 * 货物备注（长度不大于125字符）
	 **/
	private $memo;
	
	/** 
	 * 外部订单业务唯一标识：对于同一订单，在重复导入时必须保证该标识是相同的，并且相对于其它订单是唯一的（用于标识导入订单的唯一性，长度不大于64字符）
	 **/
	private $outerBizId;
	
	/** 
	 * 收货人详细地址（长度在4-60字符之间）
	 **/
	private $receiverAddress;
	
	/** 
	 * 中国地区编码值(必须为地区叶子节点)如"110101"(北京市市辖区东城区)，获取参见taobao.areas.get
	 **/
	private $receiverCountryId;
	
	/** 
	 * 收货人手机号
	 **/
	private $receiverMobilePhone;
	
	/** 
	 * 收货人姓名（长度不大于20字节）
	 **/
	private $receiverName;
	
	/** 
	 * 收货人电话号
	 **/
	private $receiverTelephone;
	
	/** 
	 * 收货人邮编
	 **/
	private $receiverZipCode;
	
	private $apiParas = array();
	
	public function setAutoConsign($autoConsign)
	{
		$this->autoConsign = $autoConsign;
		$this->apiParas["auto_consign"] = $autoConsign;
	}

	public function getAutoConsign()
	{
		return $this->autoConsign;
	}

	public function setGoodsListJson($goodsListJson)
	{
		$this->goodsListJson = $goodsListJson;
		$this->apiParas["goods_list_json"] = $goodsListJson;
	}

	public function getGoodsListJson()
	{
		return $this->goodsListJson;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setOuterBizId($outerBizId)
	{
		$this->outerBizId = $outerBizId;
		$this->apiParas["outer_biz_id"] = $outerBizId;
	}

	public function getOuterBizId()
	{
		return $this->outerBizId;
	}

	public function setReceiverAddress($receiverAddress)
	{
		$this->receiverAddress = $receiverAddress;
		$this->apiParas["receiver_address"] = $receiverAddress;
	}

	public function getReceiverAddress()
	{
		return $this->receiverAddress;
	}

	public function setReceiverCountryId($receiverCountryId)
	{
		$this->receiverCountryId = $receiverCountryId;
		$this->apiParas["receiver_country_id"] = $receiverCountryId;
	}

	public function getReceiverCountryId()
	{
		return $this->receiverCountryId;
	}

	public function setReceiverMobilePhone($receiverMobilePhone)
	{
		$this->receiverMobilePhone = $receiverMobilePhone;
		$this->apiParas["receiver_mobile_phone"] = $receiverMobilePhone;
	}

	public function getReceiverMobilePhone()
	{
		return $this->receiverMobilePhone;
	}

	public function setReceiverName($receiverName)
	{
		$this->receiverName = $receiverName;
		$this->apiParas["receiver_name"] = $receiverName;
	}

	public function getReceiverName()
	{
		return $this->receiverName;
	}

	public function setReceiverTelephone($receiverTelephone)
	{
		$this->receiverTelephone = $receiverTelephone;
		$this->apiParas["receiver_telephone"] = $receiverTelephone;
	}

	public function getReceiverTelephone()
	{
		return $this->receiverTelephone;
	}

	public function setReceiverZipCode($receiverZipCode)
	{
		$this->receiverZipCode = $receiverZipCode;
		$this->apiParas["receiver_zip_code"] = $receiverZipCode;
	}

	public function getReceiverZipCode()
	{
		return $this->receiverZipCode;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.outside.order.import";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->goodsListJson,"goodsListJson");
		RequestCheckUtil::checkNotNull($this->outerBizId,"outerBizId");
		RequestCheckUtil::checkMaxLength($this->outerBizId,64,"outerBizId");
		RequestCheckUtil::checkNotNull($this->receiverAddress,"receiverAddress");
		RequestCheckUtil::checkNotNull($this->receiverCountryId,"receiverCountryId");
		RequestCheckUtil::checkNotNull($this->receiverName,"receiverName");
		RequestCheckUtil::checkNotNull($this->receiverZipCode,"receiverZipCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
