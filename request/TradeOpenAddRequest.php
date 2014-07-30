<?php
/**
 * TOP API: taobao.trade.open.add request
 * 
 * @author auto create
 * @since 1.0, 2012-02-16 00:00:00
 */
class TradeOpenAddRequest
{
	/** 
	 * 买家留言，最大使用1000字节。
	 **/
	private $buyerMessage;
	
	/** 
	 * 是否要减库存。可选值：true（要减库存）、false（不减库存），不传默认为false。
	 **/
	private $decreaseStock;
	
	/** 
	 * 商品的优惠金额列表，以半角逗号分隔，精确到2位小数。单位：元。如果非空，则长度必须和num_iids长度一致。
	 **/
	private $discountFees;
	
	/** 
	 * 物流费用。单位：元。如：200.07，表示：200元7分。
	 **/
	private $logisticsFee;
	
	/** 
	 * 物流方式。可选值：free(卖家承担运费)，post(平邮)，express(快递)，ems(EMS)
	 **/
	private $logisticsType;
	
	/** 
	 * 商品数字ID列表，以半角逗号分隔，最大支持50个。
	 **/
	private $numIids;
	
	/** 
	 * 商品的数量列表，以半角逗号分隔，务必保持与商品数字ID列表的长度一致。
	 **/
	private $nums;
	
	/** 
	 * 支付标题，默认“外部网店”，最大长度60字节。
	 **/
	private $payTitle;
	
	/** 
	 * 交易自定义促销信息，最大支持50000字节。
	 **/
	private $promotion;
	
	/** 
	 * 收货地址（不包含省市区），最大长度为256字节。
	 **/
	private $receiverAddress;
	
	/** 
	 * 城市，最大长度为32字节。可以调用taobao.areas.get获取。
	 **/
	private $receiverCity;
	
	/** 
	 * 区/县，最大长度为32字节。可以调用taobao.areas.get获取。
	 **/
	private $receiverDistrict;
	
	/** 
	 * 收货人移动电话号码，最大长度为30字节。
	 **/
	private $receiverMobile;
	
	/** 
	 * 收货人全名，最大长度为50字节。
	 **/
	private $receiverName;
	
	/** 
	 * 收货人固定电话号码，最大长度为30字节。
	 **/
	private $receiverPhone;
	
	/** 
	 * 省份（直辖市），最大长度为32字节。可以调用taobao.areas.get获取。
	 **/
	private $receiverState;
	
	/** 
	 * 邮政编码，最大长度为20字节。可以调用taobao.areas.get获取。
	 **/
	private $receiverZip;
	
	/** 
	 * 商品的SKU数字ID列表，以半角逗号分隔，务必保持与商品数字ID列表的长度一致，如果对应的商品没有SKU，保留逗号。
	 **/
	private $skuIds;
	
	/** 
	 * 交易类型，支持shopex_trade, netcn_trade, external_trade，默认值external_trade
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setBuyerMessage($buyerMessage)
	{
		$this->buyerMessage = $buyerMessage;
		$this->apiParas["buyer_message"] = $buyerMessage;
	}

	public function getBuyerMessage()
	{
		return $this->buyerMessage;
	}

	public function setDecreaseStock($decreaseStock)
	{
		$this->decreaseStock = $decreaseStock;
		$this->apiParas["decrease_stock"] = $decreaseStock;
	}

	public function getDecreaseStock()
	{
		return $this->decreaseStock;
	}

	public function setDiscountFees($discountFees)
	{
		$this->discountFees = $discountFees;
		$this->apiParas["discount_fees"] = $discountFees;
	}

	public function getDiscountFees()
	{
		return $this->discountFees;
	}

	public function setLogisticsFee($logisticsFee)
	{
		$this->logisticsFee = $logisticsFee;
		$this->apiParas["logistics_fee"] = $logisticsFee;
	}

	public function getLogisticsFee()
	{
		return $this->logisticsFee;
	}

	public function setLogisticsType($logisticsType)
	{
		$this->logisticsType = $logisticsType;
		$this->apiParas["logistics_type"] = $logisticsType;
	}

	public function getLogisticsType()
	{
		return $this->logisticsType;
	}

	public function setNumIids($numIids)
	{
		$this->numIids = $numIids;
		$this->apiParas["num_iids"] = $numIids;
	}

	public function getNumIids()
	{
		return $this->numIids;
	}

	public function setNums($nums)
	{
		$this->nums = $nums;
		$this->apiParas["nums"] = $nums;
	}

	public function getNums()
	{
		return $this->nums;
	}

	public function setPayTitle($payTitle)
	{
		$this->payTitle = $payTitle;
		$this->apiParas["pay_title"] = $payTitle;
	}

	public function getPayTitle()
	{
		return $this->payTitle;
	}

	public function setPromotion($promotion)
	{
		$this->promotion = $promotion;
		$this->apiParas["promotion"] = $promotion;
	}

	public function getPromotion()
	{
		return $this->promotion;
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

	public function setReceiverCity($receiverCity)
	{
		$this->receiverCity = $receiverCity;
		$this->apiParas["receiver_city"] = $receiverCity;
	}

	public function getReceiverCity()
	{
		return $this->receiverCity;
	}

	public function setReceiverDistrict($receiverDistrict)
	{
		$this->receiverDistrict = $receiverDistrict;
		$this->apiParas["receiver_district"] = $receiverDistrict;
	}

	public function getReceiverDistrict()
	{
		return $this->receiverDistrict;
	}

	public function setReceiverMobile($receiverMobile)
	{
		$this->receiverMobile = $receiverMobile;
		$this->apiParas["receiver_mobile"] = $receiverMobile;
	}

	public function getReceiverMobile()
	{
		return $this->receiverMobile;
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

	public function setReceiverPhone($receiverPhone)
	{
		$this->receiverPhone = $receiverPhone;
		$this->apiParas["receiver_phone"] = $receiverPhone;
	}

	public function getReceiverPhone()
	{
		return $this->receiverPhone;
	}

	public function setReceiverState($receiverState)
	{
		$this->receiverState = $receiverState;
		$this->apiParas["receiver_state"] = $receiverState;
	}

	public function getReceiverState()
	{
		return $this->receiverState;
	}

	public function setReceiverZip($receiverZip)
	{
		$this->receiverZip = $receiverZip;
		$this->apiParas["receiver_zip"] = $receiverZip;
	}

	public function getReceiverZip()
	{
		return $this->receiverZip;
	}

	public function setSkuIds($skuIds)
	{
		$this->skuIds = $skuIds;
		$this->apiParas["sku_ids"] = $skuIds;
	}

	public function getSkuIds()
	{
		return $this->skuIds;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.open.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->buyerMessage,1000,"buyerMessage");
		RequestCheckUtil::checkNotNull($this->logisticsFee,"logisticsFee");
		RequestCheckUtil::checkNotNull($this->logisticsType,"logisticsType");
		RequestCheckUtil::checkNotNull($this->numIids,"numIids");
		RequestCheckUtil::checkNotNull($this->nums,"nums");
		RequestCheckUtil::checkMaxLength($this->payTitle,60,"payTitle");
		RequestCheckUtil::checkMaxLength($this->promotion,50000,"promotion");
		RequestCheckUtil::checkNotNull($this->receiverAddress,"receiverAddress");
		RequestCheckUtil::checkMaxLength($this->receiverAddress,256,"receiverAddress");
		RequestCheckUtil::checkNotNull($this->receiverCity,"receiverCity");
		RequestCheckUtil::checkMaxLength($this->receiverCity,32,"receiverCity");
		RequestCheckUtil::checkMaxLength($this->receiverDistrict,32,"receiverDistrict");
		RequestCheckUtil::checkMaxLength($this->receiverMobile,30,"receiverMobile");
		RequestCheckUtil::checkNotNull($this->receiverName,"receiverName");
		RequestCheckUtil::checkMaxLength($this->receiverName,50,"receiverName");
		RequestCheckUtil::checkMaxLength($this->receiverPhone,30,"receiverPhone");
		RequestCheckUtil::checkNotNull($this->receiverState,"receiverState");
		RequestCheckUtil::checkMaxLength($this->receiverState,32,"receiverState");
		RequestCheckUtil::checkNotNull($this->receiverZip,"receiverZip");
		RequestCheckUtil::checkMaxLength($this->receiverZip,20,"receiverZip");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
