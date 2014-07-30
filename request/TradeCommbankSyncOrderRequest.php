<?php
/**
 * TOP API: taobao.trade.commbank.sync.order request
 * 
 * @author auto create
 * @since 1.0, 2012-06-11 00:00:00
 */
class TradeCommbankSyncOrderRequest
{
	/** 
	 * 购买数量
	 **/
	private $buyAmount;
	
	/** 
	 * 买家id
	 **/
	private $buyerId;
	
	/** 
	 * 交行订单号
	 **/
	private $cbOrderId;
	
	/** 
	 * 交行订单创建时间
	 **/
	private $createTime;
	
	/** 
	 * 图片。尺寸：80*79。
	 **/
	private $itemImage;
	
	/** 
	 * 交行订单状态
	 **/
	private $orderStatus;
	
	/** 
	 * 卖家id
	 **/
	private $sellerId;
	
	/** 
	 * 时间戳，用于顺序控制。
	 **/
	private $timeStamp;
	
	/** 
	 * 交行订单标题
	 **/
	private $title;
	
	/** 
	 * 总价
	 **/
	private $totalFee;
	
	/** 
	 * 单价
	 **/
	private $unitPrice;
	
	private $apiParas = array();
	
	public function setBuyAmount($buyAmount)
	{
		$this->buyAmount = $buyAmount;
		$this->apiParas["buy_amount"] = $buyAmount;
	}

	public function getBuyAmount()
	{
		return $this->buyAmount;
	}

	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setCbOrderId($cbOrderId)
	{
		$this->cbOrderId = $cbOrderId;
		$this->apiParas["cb_order_id"] = $cbOrderId;
	}

	public function getCbOrderId()
	{
		return $this->cbOrderId;
	}

	public function setCreateTime($createTime)
	{
		$this->createTime = $createTime;
		$this->apiParas["create_time"] = $createTime;
	}

	public function getCreateTime()
	{
		return $this->createTime;
	}

	public function setItemImage($itemImage)
	{
		$this->itemImage = $itemImage;
		$this->apiParas["item_image"] = $itemImage;
	}

	public function getItemImage()
	{
		return $this->itemImage;
	}

	public function setOrderStatus($orderStatus)
	{
		$this->orderStatus = $orderStatus;
		$this->apiParas["order_status"] = $orderStatus;
	}

	public function getOrderStatus()
	{
		return $this->orderStatus;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setTimeStamp($timeStamp)
	{
		$this->timeStamp = $timeStamp;
		$this->apiParas["time_stamp"] = $timeStamp;
	}

	public function getTimeStamp()
	{
		return $this->timeStamp;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTotalFee($totalFee)
	{
		$this->totalFee = $totalFee;
		$this->apiParas["total_fee"] = $totalFee;
	}

	public function getTotalFee()
	{
		return $this->totalFee;
	}

	public function setUnitPrice($unitPrice)
	{
		$this->unitPrice = $unitPrice;
		$this->apiParas["unit_price"] = $unitPrice;
	}

	public function getUnitPrice()
	{
		return $this->unitPrice;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.commbank.sync.order";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyAmount,"buyAmount");
		RequestCheckUtil::checkNotNull($this->buyerId,"buyerId");
		RequestCheckUtil::checkNotNull($this->cbOrderId,"cbOrderId");
		RequestCheckUtil::checkNotNull($this->createTime,"createTime");
		RequestCheckUtil::checkNotNull($this->orderStatus,"orderStatus");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->timeStamp,"timeStamp");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->totalFee,"totalFee");
		RequestCheckUtil::checkNotNull($this->unitPrice,"unitPrice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
