<?php
/**
 * TOP API: taobao.trade.add request
 * 
 * @author auto create
 * @since 1.0, 2011-03-08 00:00:00
 */
class TradeAddRequest
{
	/** 
	 * 用户收货地址ID
	 **/
	private $addressId;
	
	/** 
	 * 是否匿名购买。false或不填都表示否
	 **/
	private $annoy;
	
	/** 
	 * 给卖家留言。
	 **/
	private $buyerMemo;
	
	/** 
	 * 是否货到付款。false或不填都表示否。COD交易时物流方式只能是express(快递)
	 **/
	private $cod;
	
	/** 
	 * 发票抬头
	 **/
	private $inovice;
	
	/** 
	 * 物流方式。可选值：free(卖家承担运费)，post(平邮)，express(快递)，ems(EMS)
	 **/
	private $logisticsType;
	
	/** 
	 * 新增收货地址时，填入的邮编
	 **/
	private $numArea;
	
	/** 
	 * 新增收货地址时，选择的市
	 **/
	private $numCity;
	
	/** 
	 * 新增收货地址时，选择的省份
	 **/
	private $numProv;
	
	/** 
	 * 每件商品的购买数量列表，用'θ'逗号分隔，务必保持与out_iids列表的长度一致
	 **/
	private $nums;
	
	/** 
	 * 商家对整个订单的折扣，单位：元，精确到分
	 **/
	private $orderDiscount;
	
	/** 
	 * 订单来源。可选值：detail(宝贝详情)，cart(购物车)
	 **/
	private $orderFrom;
	
	/** 
	 * 商品站外ID列表，以'θ'逗号分隔，最大支持50个
	 **/
	private $outIids;
	
	/** 
	 * 找人代付。false或不填都表示否
	 **/
	private $payForAnother;
	
	/** 
	 * 每个商品的图片绝对路径url列表，用'θ'逗号分隔，务必保持与out_iids列表的长度一致
	 **/
	private $picUrls;
	
	/** 
	 * 物流费用。单位：元，精确到分。约束：当cod=true时，只能用express(快递)
	 **/
	private $postFee;
	
	/** 
	 * 每个宝贝的价格列表，用'θ'逗号分隔，务必保持与out_iids列表的长度一致，单位：元，精确到分
	 **/
	private $prices;
	
	/** 
	 * 订单上的优惠描述信息，如果订单优惠不需要或者不需要描述，则可不传。格式：（长度不超过GBK编码的32个字节）
	 **/
	private $promotionDesc;
	
	/** 
	 * 新增收货地址时，填入的街道地址。5-60字符(不能全部字母或数字)
	 **/
	private $receiverAddress;
	
	/** 
	 * 新增收货地址时，填入的收货人手机号码，由11个数字组成
	 **/
	private $receiverMobile;
	
	/** 
	 * 新增收货地址时，填入的收货人姓名
	 **/
	private $receiverName;
	
	/** 
	 * 新增收货地址时，填入的固定电话的主机号。格式：5-10位数字字符
	 **/
	private $receiverPhoneCode;
	
	/** 
	 * 新增收货地址时，填入的固定电话的分机号。格式：1-6位数字字符
	 **/
	private $receiverPhoneExt;
	
	/** 
	 * 新增收货地址时，填入的固定电话的区号。格式：3-6位数字字符
	 **/
	private $receiverPhoneSection;
	
	/** 
	 * 外部的订单提交防重字符串，用于校验重复提交订单问题。格式：外部系统的前缀+下划线+外部订单ID（长度不超过GBK编码的32个字节）
	 **/
	private $saleWinSeq;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * 每个宝贝的sku信息列表，用'θ'逗号分隔，务必保持与out_iids列表的长度一致。如果都没有sku则可以不传；如果传且商品中有无sku的，需要用空格代替(见示例值)
	 **/
	private $skus;
	
	/** 
	 * 每个商品的标题列表，用'θ'逗号分隔，务必保持与out_iids列表的长度一致
	 **/
	private $titles;
	
	/** 
	 * 新增收货地址时，填入的邮编
	 **/
	private $zip;
	
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

	public function setAnnoy($annoy)
	{
		$this->annoy = $annoy;
		$this->apiParas["annoy"] = $annoy;
	}

	public function getAnnoy()
	{
		return $this->annoy;
	}

	public function setBuyerMemo($buyerMemo)
	{
		$this->buyerMemo = $buyerMemo;
		$this->apiParas["buyer_memo"] = $buyerMemo;
	}

	public function getBuyerMemo()
	{
		return $this->buyerMemo;
	}

	public function setCod($cod)
	{
		$this->cod = $cod;
		$this->apiParas["cod"] = $cod;
	}

	public function getCod()
	{
		return $this->cod;
	}

	public function setInovice($inovice)
	{
		$this->inovice = $inovice;
		$this->apiParas["inovice"] = $inovice;
	}

	public function getInovice()
	{
		return $this->inovice;
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

	public function setNumArea($numArea)
	{
		$this->numArea = $numArea;
		$this->apiParas["num_area"] = $numArea;
	}

	public function getNumArea()
	{
		return $this->numArea;
	}

	public function setNumCity($numCity)
	{
		$this->numCity = $numCity;
		$this->apiParas["num_city"] = $numCity;
	}

	public function getNumCity()
	{
		return $this->numCity;
	}

	public function setNumProv($numProv)
	{
		$this->numProv = $numProv;
		$this->apiParas["num_prov"] = $numProv;
	}

	public function getNumProv()
	{
		return $this->numProv;
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

	public function setOrderDiscount($orderDiscount)
	{
		$this->orderDiscount = $orderDiscount;
		$this->apiParas["order_discount"] = $orderDiscount;
	}

	public function getOrderDiscount()
	{
		return $this->orderDiscount;
	}

	public function setOrderFrom($orderFrom)
	{
		$this->orderFrom = $orderFrom;
		$this->apiParas["order_from"] = $orderFrom;
	}

	public function getOrderFrom()
	{
		return $this->orderFrom;
	}

	public function setOutIids($outIids)
	{
		$this->outIids = $outIids;
		$this->apiParas["out_iids"] = $outIids;
	}

	public function getOutIids()
	{
		return $this->outIids;
	}

	public function setPayForAnother($payForAnother)
	{
		$this->payForAnother = $payForAnother;
		$this->apiParas["pay_for_another"] = $payForAnother;
	}

	public function getPayForAnother()
	{
		return $this->payForAnother;
	}

	public function setPicUrls($picUrls)
	{
		$this->picUrls = $picUrls;
		$this->apiParas["pic_urls"] = $picUrls;
	}

	public function getPicUrls()
	{
		return $this->picUrls;
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

	public function setPromotionDesc($promotionDesc)
	{
		$this->promotionDesc = $promotionDesc;
		$this->apiParas["promotion_desc"] = $promotionDesc;
	}

	public function getPromotionDesc()
	{
		return $this->promotionDesc;
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

	public function setReceiverPhoneCode($receiverPhoneCode)
	{
		$this->receiverPhoneCode = $receiverPhoneCode;
		$this->apiParas["receiver_phone_code"] = $receiverPhoneCode;
	}

	public function getReceiverPhoneCode()
	{
		return $this->receiverPhoneCode;
	}

	public function setReceiverPhoneExt($receiverPhoneExt)
	{
		$this->receiverPhoneExt = $receiverPhoneExt;
		$this->apiParas["receiver_phone_ext"] = $receiverPhoneExt;
	}

	public function getReceiverPhoneExt()
	{
		return $this->receiverPhoneExt;
	}

	public function setReceiverPhoneSection($receiverPhoneSection)
	{
		$this->receiverPhoneSection = $receiverPhoneSection;
		$this->apiParas["receiver_phone_section"] = $receiverPhoneSection;
	}

	public function getReceiverPhoneSection()
	{
		return $this->receiverPhoneSection;
	}

	public function setSaleWinSeq($saleWinSeq)
	{
		$this->saleWinSeq = $saleWinSeq;
		$this->apiParas["sale_win_seq"] = $saleWinSeq;
	}

	public function getSaleWinSeq()
	{
		return $this->saleWinSeq;
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

	public function setSkus($skus)
	{
		$this->skus = $skus;
		$this->apiParas["skus"] = $skus;
	}

	public function getSkus()
	{
		return $this->skus;
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

	public function setZip($zip)
	{
		$this->zip = $zip;
		$this->apiParas["zip"] = $zip;
	}

	public function getZip()
	{
		return $this->zip;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->addressId,1,"addressId");
		RequestCheckUtil::checkMaxLength($this->buyerMemo,500,"buyerMemo");
		RequestCheckUtil::checkNotNull($this->logisticsType,"logisticsType");
		RequestCheckUtil::checkMinValue($this->numArea,1,"numArea");
		RequestCheckUtil::checkMinValue($this->numCity,1,"numCity");
		RequestCheckUtil::checkMinValue($this->numProv,1,"numProv");
		RequestCheckUtil::checkNotNull($this->nums,"nums");
		RequestCheckUtil::checkNotNull($this->orderFrom,"orderFrom");
		RequestCheckUtil::checkNotNull($this->outIids,"outIids");
		RequestCheckUtil::checkNotNull($this->picUrls,"picUrls");
		RequestCheckUtil::checkNotNull($this->postFee,"postFee");
		RequestCheckUtil::checkNotNull($this->prices,"prices");
		RequestCheckUtil::checkMaxLength($this->receiverAddress,60,"receiverAddress");
		RequestCheckUtil::checkMaxValue($this->receiverMobile,99999999999,"receiverMobile");
		RequestCheckUtil::checkMinValue($this->receiverMobile,10000000000,"receiverMobile");
		RequestCheckUtil::checkMaxLength($this->receiverName,15,"receiverName");
		RequestCheckUtil::checkMaxValue($this->receiverPhoneCode,9999999999,"receiverPhoneCode");
		RequestCheckUtil::checkMinValue($this->receiverPhoneCode,10000,"receiverPhoneCode");
		RequestCheckUtil::checkMaxValue($this->receiverPhoneExt,999999,"receiverPhoneExt");
		RequestCheckUtil::checkMinValue($this->receiverPhoneExt,1,"receiverPhoneExt");
		RequestCheckUtil::checkMaxValue($this->receiverPhoneSection,999999,"receiverPhoneSection");
		RequestCheckUtil::checkMinValue($this->receiverPhoneSection,100,"receiverPhoneSection");
		RequestCheckUtil::checkNotNull($this->saleWinSeq,"saleWinSeq");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
		RequestCheckUtil::checkMaxLength($this->sellerNick,32,"sellerNick");
		RequestCheckUtil::checkNotNull($this->titles,"titles");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
