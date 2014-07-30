<?php
/**
 * TOP API: taobao.trade.opensearch.add request
 * 
 * @author auto create
 * @since 1.0, 2011-08-16 00:00:00
 */
class TradeOpensearchAddRequest
{
	/** 
	 * 支付宝订单id，cod=false时必填
	 **/
	private $alipayOrderId;
	
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 是否货到付款。false表示否。COD交易时物流方式只能是express(快递)
	 **/
	private $cod;
	
	/** 
	 * 物流方式。可选值：post(平邮)，express(快递)
	 **/
	private $logisticsType;
	
	/** 
	 * 每件商品的购买数量列表，用'θ'逗号分隔，务必保持与out_iids列表的长度一致
	 **/
	private $nums;
	
	/** 
	 * 商品站外ID列表，以'θ'逗号分隔，最大支持50个
	 **/
	private $outIids;
	
	/** 
	 * 商家自定义订单id
	 **/
	private $outOrderId;
	
	/** 
	 * 每个商品的图片绝对路径url列表，用'θ'逗号分隔，务必保持与out_iids列表的长度一致。每个url必须以.jpg、.jpeg、.gif或.png结尾
	 **/
	private $picUrls;
	
	/** 
	 * 物流费用。单位：元，精确到分。
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
	 * 收货人手机号码，由11个数字组成。手机号码和固定号码必填其一
	 **/
	private $receiverMobile;
	
	/** 
	 * 收货人姓名
	 **/
	private $receiverName;
	
	/** 
	 * 固定电话号码，格式：区号-号码。手机号码和固定号码必填其一
	 **/
	private $receiverPhone;
	
	/** 
	 * 每个宝贝的sku信息列表，用'θ'逗号分隔，务必保持与out_iids列表的长度一致。如果都没有sku则可以不传；如果传且商品中有无sku的，需要用空格代替(见示例值)
	 **/
	private $skus;
	
	/** 
	 * 每个商品的标题列表，用'θ'逗号分隔，务必保持与out_iids列表的长度一致
	 **/
	private $titles;
	
	private $apiParas = array();
	
	public function setAlipayOrderId($alipayOrderId)
	{
		$this->alipayOrderId = $alipayOrderId;
		$this->apiParas["alipay_order_id"] = $alipayOrderId;
	}

	public function getAlipayOrderId()
	{
		return $this->alipayOrderId;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
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

	public function setLogisticsType($logisticsType)
	{
		$this->logisticsType = $logisticsType;
		$this->apiParas["logistics_type"] = $logisticsType;
	}

	public function getLogisticsType()
	{
		return $this->logisticsType;
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

	public function setOutIids($outIids)
	{
		$this->outIids = $outIids;
		$this->apiParas["out_iids"] = $outIids;
	}

	public function getOutIids()
	{
		return $this->outIids;
	}

	public function setOutOrderId($outOrderId)
	{
		$this->outOrderId = $outOrderId;
		$this->apiParas["out_order_id"] = $outOrderId;
	}

	public function getOutOrderId()
	{
		return $this->outOrderId;
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

	public function setReceiverPhone($receiverPhone)
	{
		$this->receiverPhone = $receiverPhone;
		$this->apiParas["receiver_phone"] = $receiverPhone;
	}

	public function getReceiverPhone()
	{
		return $this->receiverPhone;
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

	public function getApiMethodName()
	{
		return "taobao.trade.opensearch.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkMaxLength($this->buyerNick,32,"buyerNick");
		RequestCheckUtil::checkNotNull($this->cod,"cod");
		RequestCheckUtil::checkNotNull($this->logisticsType,"logisticsType");
		RequestCheckUtil::checkNotNull($this->nums,"nums");
		RequestCheckUtil::checkNotNull($this->outIids,"outIids");
		RequestCheckUtil::checkNotNull($this->outOrderId,"outOrderId");
		RequestCheckUtil::checkNotNull($this->picUrls,"picUrls");
		RequestCheckUtil::checkNotNull($this->postFee,"postFee");
		RequestCheckUtil::checkNotNull($this->prices,"prices");
		RequestCheckUtil::checkNotNull($this->receiverAddress,"receiverAddress");
		RequestCheckUtil::checkMaxLength($this->receiverAddress,60,"receiverAddress");
		RequestCheckUtil::checkMaxValue($this->receiverMobile,99999999999,"receiverMobile");
		RequestCheckUtil::checkMinValue($this->receiverMobile,10000000000,"receiverMobile");
		RequestCheckUtil::checkNotNull($this->receiverName,"receiverName");
		RequestCheckUtil::checkMaxLength($this->receiverName,15,"receiverName");
		RequestCheckUtil::checkNotNull($this->titles,"titles");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
