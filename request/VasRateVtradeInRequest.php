<?php
/**
 * TOP API: taobao.vas.rate.vtrade.in request
 * 
 * @author auto create
 * @since 1.0, 2012-12-06 00:00:00
 */
class VasRateVtradeInRequest
{
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 买家id
	 **/
	private $buyerId;
	
	/** 
	 * 买家名称
	 **/
	private $buyerName;
	
	/** 
	 * 交易结束时间
	 **/
	private $endDate;
	
	/** 
	 * 唯一标示号
	 **/
	private $externalNo;
	
	/** 
	 * 主订单id
	 **/
	private $pTradeId;
	
	/** 
	 * 主订单扩展信息
	 **/
	private $pTradeInfo;
	
	/** 
	 * 交易实付金额
	 **/
	private $quantity;
	
	/** 
	 * 请求时间
	 **/
	private $requestDate;
	
	/** 
	 * 服务CODE
	 **/
	private $servCode;
	
	/** 
	 * 交易创建时间
	 **/
	private $startDate;
	
	/** 
	 * 子订单信息 json 序列化
	 **/
	private $tradesInfo;
	
	/** 
	 * 卖家支付宝账号
	 **/
	private $userAlipayId;
	
	/** 
	 * 用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
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

	public function setBuyerName($buyerName)
	{
		$this->buyerName = $buyerName;
		$this->apiParas["buyer_name"] = $buyerName;
	}

	public function getBuyerName()
	{
		return $this->buyerName;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setExternalNo($externalNo)
	{
		$this->externalNo = $externalNo;
		$this->apiParas["external_no"] = $externalNo;
	}

	public function getExternalNo()
	{
		return $this->externalNo;
	}

	public function setpTradeId($pTradeId)
	{
		$this->pTradeId = $pTradeId;
		$this->apiParas["p_trade_id"] = $pTradeId;
	}

	public function getpTradeId()
	{
		return $this->pTradeId;
	}

	public function setpTradeInfo($pTradeInfo)
	{
		$this->pTradeInfo = $pTradeInfo;
		$this->apiParas["p_trade_info"] = $pTradeInfo;
	}

	public function getpTradeInfo()
	{
		return $this->pTradeInfo;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setRequestDate($requestDate)
	{
		$this->requestDate = $requestDate;
		$this->apiParas["request_date"] = $requestDate;
	}

	public function getRequestDate()
	{
		return $this->requestDate;
	}

	public function setServCode($servCode)
	{
		$this->servCode = $servCode;
		$this->apiParas["serv_code"] = $servCode;
	}

	public function getServCode()
	{
		return $this->servCode;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setTradesInfo($tradesInfo)
	{
		$this->tradesInfo = $tradesInfo;
		$this->apiParas["trades_info"] = $tradesInfo;
	}

	public function getTradesInfo()
	{
		return $this->tradesInfo;
	}

	public function setUserAlipayId($userAlipayId)
	{
		$this->userAlipayId = $userAlipayId;
		$this->apiParas["user_alipay_id"] = $userAlipayId;
	}

	public function getUserAlipayId()
	{
		return $this->userAlipayId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.rate.vtrade.in";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->externalNo,"externalNo");
		RequestCheckUtil::checkNotNull($this->pTradeId,"pTradeId");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkNotNull($this->requestDate,"requestDate");
		RequestCheckUtil::checkNotNull($this->servCode,"servCode");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
		RequestCheckUtil::checkNotNull($this->tradesInfo,"tradesInfo");
		RequestCheckUtil::checkNotNull($this->userAlipayId,"userAlipayId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
