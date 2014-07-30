<?php
/**
 * TOP API: taobao.vas.isv.url.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class VasIsvUrlGetRequest
{
	/** 
	 * 渠道商的支付宝帐号ID
	 **/
	private $alipayId;
	
	/** 
	 * 订购时间
	 **/
	private $buyerTime;
	
	/** 
	 * 各种订购的描述
	 **/
	private $description;
	
	/** 
	 * 商品Id(如：快乐岛主游戏名称id,楼一幢游戏名称id)
	 **/
	private $itemId;
	
	/** 
	 * 商品名称 (如：游戏名称：快乐岛主 楼一幢)
	 **/
	private $itemName;
	
	/** 
	 * 商品版本Id(如：M币id,宝石id)
	 **/
	private $itemVersionId;
	
	/** 
	 * 商品版本名称(如：宝石，M币)
	 **/
	private $itemVersionName;
	
	/** 
	 * 外部订单id
	 **/
	private $outerOrderId;
	
	/** 
	 * 地址,回跳的isv请求地址
	 **/
	private $pageRetUrl;
	
	/** 
	 * 渠道商编码,是区分isv
	 **/
	private $proxyCode;
	
	/** 
	 * 交易总金额,以元为单位，如是2.15
	 **/
	private $totalPrice;
	
	private $apiParas = array();
	
	public function setAlipayId($alipayId)
	{
		$this->alipayId = $alipayId;
		$this->apiParas["alipay_id"] = $alipayId;
	}

	public function getAlipayId()
	{
		return $this->alipayId;
	}

	public function setBuyerTime($buyerTime)
	{
		$this->buyerTime = $buyerTime;
		$this->apiParas["buyer_time"] = $buyerTime;
	}

	public function getBuyerTime()
	{
		return $this->buyerTime;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setItemName($itemName)
	{
		$this->itemName = $itemName;
		$this->apiParas["item_name"] = $itemName;
	}

	public function getItemName()
	{
		return $this->itemName;
	}

	public function setItemVersionId($itemVersionId)
	{
		$this->itemVersionId = $itemVersionId;
		$this->apiParas["item_version_id"] = $itemVersionId;
	}

	public function getItemVersionId()
	{
		return $this->itemVersionId;
	}

	public function setItemVersionName($itemVersionName)
	{
		$this->itemVersionName = $itemVersionName;
		$this->apiParas["item_version_name"] = $itemVersionName;
	}

	public function getItemVersionName()
	{
		return $this->itemVersionName;
	}

	public function setOuterOrderId($outerOrderId)
	{
		$this->outerOrderId = $outerOrderId;
		$this->apiParas["outer_order_id"] = $outerOrderId;
	}

	public function getOuterOrderId()
	{
		return $this->outerOrderId;
	}

	public function setPageRetUrl($pageRetUrl)
	{
		$this->pageRetUrl = $pageRetUrl;
		$this->apiParas["page_ret_url"] = $pageRetUrl;
	}

	public function getPageRetUrl()
	{
		return $this->pageRetUrl;
	}

	public function setProxyCode($proxyCode)
	{
		$this->proxyCode = $proxyCode;
		$this->apiParas["proxy_code"] = $proxyCode;
	}

	public function getProxyCode()
	{
		return $this->proxyCode;
	}

	public function setTotalPrice($totalPrice)
	{
		$this->totalPrice = $totalPrice;
		$this->apiParas["total_price"] = $totalPrice;
	}

	public function getTotalPrice()
	{
		return $this->totalPrice;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.isv.url.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alipayId,"alipayId");
		RequestCheckUtil::checkNotNull($this->buyerTime,"buyerTime");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->itemName,"itemName");
		RequestCheckUtil::checkNotNull($this->itemVersionId,"itemVersionId");
		RequestCheckUtil::checkNotNull($this->itemVersionName,"itemVersionName");
		RequestCheckUtil::checkNotNull($this->outerOrderId,"outerOrderId");
		RequestCheckUtil::checkNotNull($this->pageRetUrl,"pageRetUrl");
		RequestCheckUtil::checkNotNull($this->proxyCode,"proxyCode");
		RequestCheckUtil::checkNotNull($this->totalPrice,"totalPrice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
