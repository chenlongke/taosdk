<?php
/**
 * TOP API: taobao.trade.forum.add request
 * 
 * @author auto create
 * @since 1.0, 2012-10-15 00:00:00
 */
class TradeForumAddRequest
{
	/** 
	 * 地区代码，如330106表示杭州市西湖区，详情请参考：http://www.stats.gov.cn/tjbz/xzqhdm /t20090626_402568086.htm
	 **/
	private $areaCode;
	
	/** 
	 * 买家留言。
	 **/
	private $buyerMessage;
	
	/** 
	 * 是否要减库存。
	 **/
	private $decreaseStock;
	
	/** 
	 * 订单是否为wap订单
	 **/
	private $isWap;
	
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
	 * 子订单的优惠金额列表，以半角逗号分隔，务必保持与商品数字ID列表的长度一致，如果对应的商品没有折扣，保留逗号。
	 **/
	private $orderDiscountFees;
	
	/** 
	 * 交易标题。
	 **/
	private $payTitle;
	
	/** 
	 * alimama账号
	 **/
	private $pid;
	
	/** 
	 * 商品的价格列表，以半角逗号分隔，务必保持与商品数字ID列表的长度一致。
	 **/
	private $prices;
	
	/** 
	 * 收货地址（不包含省市区）
	 **/
	private $receiverAddress;
	
	/** 
	 * 城市，可以调用taobao.areas.get获取。
	 **/
	private $receiverCity;
	
	/** 
	 * 区/县，可以调用taobao.areas.get获取。
	 **/
	private $receiverDistrict;
	
	/** 
	 * 收货人移动电话号码。
	 **/
	private $receiverMobile;
	
	/** 
	 * 收货人全名。
	 **/
	private $receiverName;
	
	/** 
	 * 收货人固定电话号码。
	 **/
	private $receiverPhone;
	
	/** 
	 * 省份（直辖市），可以调用taobao.areas.get获取。
	 **/
	private $receiverState;
	
	/** 
	 * 邮政编码，可以调用taobao.areas.get获取。
	 **/
	private $receiverZip;
	
	/** 
	 * 卖家昵称。
	 **/
	private $sellerNick;
	
	/** 
	 * 商品的SKU数字ID列表，以半角逗号分隔，务必保持与商品数字ID列表的长度一致，如果对应的商品没有SKU，保留逗号。
	 **/
	private $skuIds;
	
	/** 
	 * 淘宝客推广者昵称。(以后将不再支持，请使用pid)
	 **/
	private $taobaokeNick;
	
	/** 
	 * 商品的标题列表，以半角逗号分隔，务必保持与商品数字ID列表的长度一致。单个商品的标题长度不能超过4000字节。
	 **/
	private $titles;
	
	/** 
	 * 交易折扣，如满100减10元。
	 **/
	private $tradeDiscountFee;
	
	private $apiParas = array();
	
	public function setAreaCode($areaCode)
	{
		$this->areaCode = $areaCode;
		$this->apiParas["area_code"] = $areaCode;
	}

	public function getAreaCode()
	{
		return $this->areaCode;
	}

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

	public function setIsWap($isWap)
	{
		$this->isWap = $isWap;
		$this->apiParas["is_wap"] = $isWap;
	}

	public function getIsWap()
	{
		return $this->isWap;
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

	public function setOrderDiscountFees($orderDiscountFees)
	{
		$this->orderDiscountFees = $orderDiscountFees;
		$this->apiParas["order_discount_fees"] = $orderDiscountFees;
	}

	public function getOrderDiscountFees()
	{
		return $this->orderDiscountFees;
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

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setPrices($prices)
	{
		$this->prices = $prices;
		$this->apiParas["prices"] = $prices;
	}

	public function getPrices()
	{
		return $this->prices;
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

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
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

	public function setTaobaokeNick($taobaokeNick)
	{
		$this->taobaokeNick = $taobaokeNick;
		$this->apiParas["taobaoke_nick"] = $taobaokeNick;
	}

	public function getTaobaokeNick()
	{
		return $this->taobaokeNick;
	}

	public function setTitles($titles)
	{
		$this->titles = $titles;
		$this->apiParas["titles"] = $titles;
	}

	public function getTitles()
	{
		return $this->titles;
	}

	public function setTradeDiscountFee($tradeDiscountFee)
	{
		$this->tradeDiscountFee = $tradeDiscountFee;
		$this->apiParas["trade_discount_fee"] = $tradeDiscountFee;
	}

	public function getTradeDiscountFee()
	{
		return $this->tradeDiscountFee;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.forum.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->areaCode,"areaCode");
		RequestCheckUtil::checkMaxLength($this->buyerMessage,1000,"buyerMessage");
		RequestCheckUtil::checkNotNull($this->logisticsFee,"logisticsFee");
		RequestCheckUtil::checkNotNull($this->logisticsType,"logisticsType");
		RequestCheckUtil::checkNotNull($this->numIids,"numIids");
		RequestCheckUtil::checkNotNull($this->nums,"nums");
		RequestCheckUtil::checkNotNull($this->payTitle,"payTitle");
		RequestCheckUtil::checkMaxLength($this->payTitle,60,"payTitle");
		RequestCheckUtil::checkNotNull($this->prices,"prices");
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
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
		RequestCheckUtil::checkNotNull($this->titles,"titles");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
