<?php
/**
 * TOP API: taobao.vas.accout.balance.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-06 00:00:00
 */
class VasAccoutBalanceGetRequest
{
	/** 
	 * 外部个性化支付宝操作备
	 **/
	private $alipayDescriptions;
	
	/** 
	 * 外部应用码
	 **/
	private $appCode;
	
	/** 
	 * 资金类型
	 **/
	private $balanceType;
	
	/** 
	 * 外部个性化账本操作备
	 **/
	private $descriptions;
	
	/** 
	 * 操作码
	 **/
	private $opCode;
	
	/** 
	 * 请求时间
	 **/
	private $requestTime;
	
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

	public function setRequestTime($requestTime)
	{
		$this->requestTime = $requestTime;
		$this->apiParas["request_time"] = $requestTime;
	}

	public function getRequestTime()
	{
		return $this->requestTime;
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
		return "taobao.vas.accout.balance.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appCode,"appCode");
		RequestCheckUtil::checkMaxLength($this->appCode,50,"appCode");
		RequestCheckUtil::checkNotNull($this->opCode,"opCode");
		RequestCheckUtil::checkMaxLength($this->opCode,50,"opCode");
		RequestCheckUtil::checkNotNull($this->requestTime,"requestTime");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
