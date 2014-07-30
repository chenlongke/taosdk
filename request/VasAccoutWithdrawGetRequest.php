<?php
/**
 * TOP API: taobao.vas.accout.withdraw.get request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class VasAccoutWithdrawGetRequest
{
	/** 
	 * 外部个性化支付宝操作备
	 **/
	private $alipayDescriptions;
	
	/** 
	 * 提款金额
	 **/
	private $amount;
	
	/** 
	 * 应用码
	 **/
	private $appCode;
	
	/** 
	 * 资产类型
	 **/
	private $balanceType;
	
	/** 
	 * 个性化账本操作备
	 **/
	private $descriptions;
	
	/** 
	 * 操作码
	 **/
	private $opCode;
	
	/** 
	 * 交易号
	 **/
	private $outTradeNo;
	
	/** 
	 * 请求时间
	 **/
	private $requestTime;
	
	/** 
	 * 签名
	 **/
	private $signStr;
	
	/** 
	 * 用户id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setAlipayDescriptions($alipayDescriptions)
	{
		$this->alipayDescriptions = $alipayDescriptions;
		$this->apiParas["alipay_descriptions"] = $alipayDescriptions;
	}

	public function getAlipayDescriptions()
	{
		return $this->alipayDescriptions;
	}

	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function setAppCode($appCode)
	{
		$this->appCode = $appCode;
		$this->apiParas["app_code"] = $appCode;
	}

	public function getAppCode()
	{
		return $this->appCode;
	}

	public function setBalanceType($balanceType)
	{
		$this->balanceType = $balanceType;
		$this->apiParas["balance_type"] = $balanceType;
	}

	public function getBalanceType()
	{
		return $this->balanceType;
	}

	public function setDescriptions($descriptions)
	{
		$this->descriptions = $descriptions;
		$this->apiParas["descriptions"] = $descriptions;
	}

	public function getDescriptions()
	{
		return $this->descriptions;
	}

	public function setOpCode($opCode)
	{
		$this->opCode = $opCode;
		$this->apiParas["op_code"] = $opCode;
	}

	public function getOpCode()
	{
		return $this->opCode;
	}

	public function setOutTradeNo($outTradeNo)
	{
		$this->outTradeNo = $outTradeNo;
		$this->apiParas["out_trade_no"] = $outTradeNo;
	}

	public function getOutTradeNo()
	{
		return $this->outTradeNo;
	}

	public function setRequestTime($requestTime)
	{
		$this->requestTime = $requestTime;
		$this->apiParas["request_time"] = $requestTime;
	}

	public function getRequestTime()
	{
		return $this->requestTime;
	}

	public function setSignStr($signStr)
	{
		$this->signStr = $signStr;
		$this->apiParas["sign_str"] = $signStr;
	}

	public function getSignStr()
	{
		return $this->signStr;
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
		return "taobao.vas.accout.withdraw.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
		RequestCheckUtil::checkNotNull($this->appCode,"appCode");
		RequestCheckUtil::checkNotNull($this->opCode,"opCode");
		RequestCheckUtil::checkNotNull($this->outTradeNo,"outTradeNo");
		RequestCheckUtil::checkNotNull($this->requestTime,"requestTime");
		RequestCheckUtil::checkNotNull($this->signStr,"signStr");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
