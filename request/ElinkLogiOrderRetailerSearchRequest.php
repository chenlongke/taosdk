<?php
/**
 * TOP API: taobao.elink.logi.order.retailer.search request
 * 
 * @author auto create
 * @since 1.0, 2011-07-18 00:00:00
 */
class ElinkLogiOrderRetailerSearchRequest
{
	/** 
	 * 外部交易号
	 **/
	private $bizTradeNo;
	
	/** 
	 * 零售商确认时间(结束)
	 **/
	private $confirmTimeEnd;
	
	/** 
	 * 零售商确认时间(开始)
	 **/
	private $confirmTimeStart;
	
	/** 
	 * 当前页
	 **/
	private $currentPage;
	
	/** 
	 * 商品名称
	 **/
	private $itemName;
	
	/** 
	 * 物流订单号
	 **/
	private $logisticsOrderId;
	
	/** 
	 * 每次返回数量
	 **/
	private $pageSize;
	
	/** 
	 * 付款时间(结束)
	 **/
	private $payTimeEnd;
	
	/** 
	 * 付款时间(开始)
	 **/
	private $payTimeStart;
	
	/** 
	 * 收件人姓名
	 **/
	private $receiverName;
	
	/** 
	 * 发货时间(结束)
	 **/
	private $sendTimeEnd;
	
	/** 
	 * 发货时间(开始)
	 **/
	private $sendTimeStart;
	
	/** 
	 * 商品SKU Id
	 **/
	private $skuId;
	
	/** 
	 * 物流订单状态
1零售商未确认,2零售商已确认,3供货商已经发货,4取消发货
	 **/
	private $status;
	
	/** 
	 * 供货商昵称
	 **/
	private $supplierNick;
	
	/** 
	 * 交易类型列表，同时查询多种交易类型可用逗号分隔。默认同时查询guarantee_trade, auto_delivery, ec, cod的4种交易类型的数据 可选值 fixed(一口价) auction(拍卖) guarantee_trade(一口价、拍卖) auto_delivery(自动发货) independent_simple_trade(旺店入门版交易) independent_shop_trade(旺店标准版交易) ec(直冲) cod(货到付款) fenxiao(分销) game_equipment(游戏装备) shopex_trade(ShopEX交易) netcn_trade(万网交易) external_trade(统一外部交易)
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setBizTradeNo($bizTradeNo)
	{
		$this->bizTradeNo = $bizTradeNo;
		$this->apiParas["biz_trade_no"] = $bizTradeNo;
	}

	public function getBizTradeNo()
	{
		return $this->bizTradeNo;
	}

	public function setConfirmTimeEnd($confirmTimeEnd)
	{
		$this->confirmTimeEnd = $confirmTimeEnd;
		$this->apiParas["confirm_time_end"] = $confirmTimeEnd;
	}

	public function getConfirmTimeEnd()
	{
		return $this->confirmTimeEnd;
	}

	public function setConfirmTimeStart($confirmTimeStart)
	{
		$this->confirmTimeStart = $confirmTimeStart;
		$this->apiParas["confirm_time_start"] = $confirmTimeStart;
	}

	public function getConfirmTimeStart()
	{
		return $this->confirmTimeStart;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function setLogisticsOrderId($logisticsOrderId)
	{
		$this->logisticsOrderId = $logisticsOrderId;
		$this->apiParas["logistics_order_id"] = $logisticsOrderId;
	}

	public function getLogisticsOrderId()
	{
		return $this->logisticsOrderId;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setPayTimeEnd($payTimeEnd)
	{
		$this->payTimeEnd = $payTimeEnd;
		$this->apiParas["pay_time_end"] = $payTimeEnd;
	}

	public function getPayTimeEnd()
	{
		return $this->payTimeEnd;
	}

	public function setPayTimeStart($payTimeStart)
	{
		$this->payTimeStart = $payTimeStart;
		$this->apiParas["pay_time_start"] = $payTimeStart;
	}

	public function getPayTimeStart()
	{
		return $this->payTimeStart;
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

	public function setSendTimeEnd($sendTimeEnd)
	{
		$this->sendTimeEnd = $sendTimeEnd;
		$this->apiParas["send_time_end"] = $sendTimeEnd;
	}

	public function getSendTimeEnd()
	{
		return $this->sendTimeEnd;
	}

	public function setSendTimeStart($sendTimeStart)
	{
		$this->sendTimeStart = $sendTimeStart;
		$this->apiParas["send_time_start"] = $sendTimeStart;
	}

	public function getSendTimeStart()
	{
		return $this->sendTimeStart;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setSupplierNick($supplierNick)
	{
		$this->supplierNick = $supplierNick;
		$this->apiParas["supplier_nick"] = $supplierNick;
	}

	public function getSupplierNick()
	{
		return $this->supplierNick;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.logi.order.retailer.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->bizTradeNo,64,"bizTradeNo");
		RequestCheckUtil::checkMaxValue($this->currentPage,10000,"currentPage");
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkMaxLength($this->itemName,128,"itemName");
		RequestCheckUtil::checkMaxValue($this->pageSize,20,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,0,"pageSize");
		RequestCheckUtil::checkMaxLength($this->skuId,128,"skuId");
		RequestCheckUtil::checkMaxValue($this->status,64,"status");
		RequestCheckUtil::checkMinValue($this->status,0,"status");
		RequestCheckUtil::checkMaxLength($this->supplierNick,32,"supplierNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
