<?php
/**
 * TOP API: taobao.trade.nbsadd request
 * 
 * @author auto create
 * @since 1.0, 2012-03-15 00:00:00
 */
class TradeNbsaddRequest
{
	/** 
	 * 买家留言。
	 **/
	private $buyerMessage;
	
	/** 
	 * 是否要减库存(只对type=external_trade有效)。可选值：true（要减库存）、false（不减库存）。
	 **/
	private $decreaseStock;
	
	/** 
	 * 系统优惠金额列表，精确到2位小数。单位：元。以半角“,”分隔。如果非空，则长度必须和num_iids长度一致。
	 **/
	private $discountFees;
	
	/** 
	 * 地区编码。
	 **/
	private $divisionCode;
	
	/** 
	 * 商品备注列表。以半角“,”分隔。如果非空，则长度必须和num_iids长度一致。
	 **/
	private $itemMemos;
	
	/** 
	 * 收货地址。
	 **/
	private $locationAddress;
	
	/** 
	 * 城市。
	 **/
	private $locationCity;
	
	/** 
	 * 区/县。
	 **/
	private $locationDistrict;
	
	/** 
	 * 地址编号。如果不保存地址(save_deliver_addr=false)，此字段一定要填，否则不能设置默认地址。
	 **/
	private $locationId;
	
	/** 
	 * 省份。
	 **/
	private $locationState;
	
	/** 
	 * 邮政编码。
	 **/
	private $locationZip;
	
	/** 
	 * 物流方式。可选值：free(卖家承担运费),post(平邮),express(快递),ems(EMS),virtual(虚拟物品)。
	 **/
	private $logisticType;
	
	/** 
	 * 移动电话。
	 **/
	private $mobile;
	
	/** 
	 * 商品数字编号列表，以半角“,”分隔，必选
	 **/
	private $numIids;
	
	/** 
	 * 购买数量列表，以“,”分隔。
	 **/
	private $nums;
	
	/** 
	 * 支付标题，显示在支付宝的付款页面上。
	 **/
	private $payTitle;
	
	/** 
	 * 固定电话。
	 **/
	private $phone;
	
	/** 
	 * 物流费用。单位:元。如:200.07，表示:200元7分。
	 **/
	private $postFee;
	
	/** 
	 * 商品价格列表。以半角“,”分隔；如：100.00, 200.00。单位:元。如:200.07，表示:200元7分。
	 **/
	private $prices;
	
	/** 
	 * 收货人全名。
	 **/
	private $receiverName;
	
	/** 
	 * 是否需要保存买家的收货地址。（注意：如果要保存地址，必须填写：省份、城市、地区、收货人姓名、电话号码。地址保存是否成功不影响交易）。
	 **/
	private $saveDeliverAddr;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * 商品销售属性编号列表。以半角“,”分隔。如果非空，则长度必须和num_iids长度一致。
	 **/
	private $skuIds;
	
	/** 
	 * 商品标题列表。以半角“,”分隔。如果非空，则长度必须和num_iids长度一致。
	 **/
	private $titles;
	
	/** 
	 * 交易备注。
	 **/
	private $tradeMemo;
	
	/** 
	 * 外部交易来源，可选值：forum（社区订单）、tom（开源旺店）、tp（合作伙伴）。
	 **/
	private $tradeSource;
	
	/** 
	 * 交易类型，目前支持以下几种：
shopex_trade, netcn_trade, external_trade
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

	public function setDivisionCode($divisionCode)
	{
		$this->divisionCode = $divisionCode;
		$this->apiParas["division_code"] = $divisionCode;
	}

	public function getDivisionCode()
	{
		return $this->divisionCode;
	}

	public function setItemMemos($itemMemos)
	{
		$this->itemMemos = $itemMemos;
		$this->apiParas["item_memos"] = $itemMemos;
	}

	public function getItemMemos()
	{
		return $this->itemMemos;
	}

	public function setLocationAddress($locationAddress)
	{
		$this->locationAddress = $locationAddress;
		$this->apiParas["location.address"] = $locationAddress;
	}

	public function getLocationAddress()
	{
		return $this->locationAddress;
	}

	public function setLocationCity($locationCity)
	{
		$this->locationCity = $locationCity;
		$this->apiParas["location.city"] = $locationCity;
	}

	public function getLocationCity()
	{
		return $this->locationCity;
	}

	public function setLocationDistrict($locationDistrict)
	{
		$this->locationDistrict = $locationDistrict;
		$this->apiParas["location.district"] = $locationDistrict;
	}

	public function getLocationDistrict()
	{
		return $this->locationDistrict;
	}

	public function setLocationId($locationId)
	{
		$this->locationId = $locationId;
		$this->apiParas["location.id"] = $locationId;
	}

	public function getLocationId()
	{
		return $this->locationId;
	}

	public function setLocationState($locationState)
	{
		$this->locationState = $locationState;
		$this->apiParas["location.state"] = $locationState;
	}

	public function getLocationState()
	{
		return $this->locationState;
	}

	public function setLocationZip($locationZip)
	{
		$this->locationZip = $locationZip;
		$this->apiParas["location.zip"] = $locationZip;
	}

	public function getLocationZip()
	{
		return $this->locationZip;
	}

	public function setLogisticType($logisticType)
	{
		$this->logisticType = $logisticType;
		$this->apiParas["logistic.type"] = $logisticType;
	}

	public function getLogisticType()
	{
		return $this->logisticType;
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

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setPostFee($postFee)
	{
		$this->postFee = $postFee;
		$this->apiParas["post_fee"] = $postFee;
	}

	public function getPostFee()
	{
		return $this->postFee;
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

	public function setReceiverName($receiverName)
	{
		$this->receiverName = $receiverName;
		$this->apiParas["receiver_name"] = $receiverName;
	}

	public function getReceiverName()
	{
		return $this->receiverName;
	}

	public function setSaveDeliverAddr($saveDeliverAddr)
	{
		$this->saveDeliverAddr = $saveDeliverAddr;
		$this->apiParas["save_deliver_addr"] = $saveDeliverAddr;
	}

	public function getSaveDeliverAddr()
	{
		return $this->saveDeliverAddr;
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

	public function setTitles($titles)
	{
		$this->titles = $titles;
		$this->apiParas["titles"] = $titles;
	}

	public function getTitles()
	{
		return $this->titles;
	}

	public function setTradeMemo($tradeMemo)
	{
		$this->tradeMemo = $tradeMemo;
		$this->apiParas["trade_memo"] = $tradeMemo;
	}

	public function getTradeMemo()
	{
		return $this->tradeMemo;
	}

	public function setTradeSource($tradeSource)
	{
		$this->tradeSource = $tradeSource;
		$this->apiParas["trade_source"] = $tradeSource;
	}

	public function getTradeSource()
	{
		return $this->tradeSource;
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
		return "taobao.trade.nbsadd";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->buyerMessage,1000,"buyerMessage");
		RequestCheckUtil::checkNotNull($this->divisionCode,"divisionCode");
		RequestCheckUtil::checkNotNull($this->locationAddress,"locationAddress");
		RequestCheckUtil::checkMaxLength($this->locationAddress,256,"locationAddress");
		RequestCheckUtil::checkMaxLength($this->locationCity,32,"locationCity");
		RequestCheckUtil::checkMaxLength($this->locationDistrict,32,"locationDistrict");
		RequestCheckUtil::checkMaxLength($this->locationState,32,"locationState");
		RequestCheckUtil::checkNotNull($this->locationZip,"locationZip");
		RequestCheckUtil::checkMaxLength($this->locationZip,20,"locationZip");
		RequestCheckUtil::checkNotNull($this->logisticType,"logisticType");
		RequestCheckUtil::checkMaxLength($this->mobile,30,"mobile");
		RequestCheckUtil::checkNotNull($this->numIids,"numIids");
		RequestCheckUtil::checkMaxListSize($this->numIids,50,"numIids");
		RequestCheckUtil::checkNotNull($this->nums,"nums");
		RequestCheckUtil::checkMaxLength($this->payTitle,60,"payTitle");
		RequestCheckUtil::checkMaxLength($this->phone,30,"phone");
		RequestCheckUtil::checkNotNull($this->postFee,"postFee");
		RequestCheckUtil::checkNotNull($this->prices,"prices");
		RequestCheckUtil::checkMaxLength($this->receiverName,50,"receiverName");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
