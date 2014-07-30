<?php
/**
 * TOP API: taobao.vas.accout.transfer.update request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class VasAccoutTransferUpdateRequest
{
	/** 
	 * 外部个性化支付宝操作备
	 **/
	private $alipayDescriptions;
	
	/** 
	 * 转入金额
	 **/
	private $amount;
	
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
	 * 外部交易号
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
	 * 账本目标科目
	 **/
	private $targetOpCode;
	
	/** 
	 * 转入用户id，如账户内部转账，请填写与user_id相同
	 **/
	private $targetUserId;
	
	/** 
	 * 用户数字ID
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

	public function setTargetOpCode($targetOpCode)
	{
		$this->targetOpCode = $targetOpCode;
		$this->apiParas["target_op_code"] = $targetOpCode;
	}

	public function getTargetOpCode()
	{
		return $this->targetOpCode;
	}

	public function setTargetUserId($targetUserId)
	{
		$this->targetUserId = $targetUserId;
		$this->apiParas["target_user_id"] = $targetUserId;
	}

	public function getTargetUserId()
	{
		return $this->targetUserId;
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
		return "taobao.vas.accout.transfer.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
		RequestCheckUtil::checkNotNull($this->appCode,"appCode");
		RequestCheckUtil::checkMaxLength($this->appCode,50,"appCode");
		RequestCheckUtil::checkNotNull($this->opCode,"opCode");
		RequestCheckUtil::checkNotNull($this->outTradeNo,"outTradeNo");
		RequestCheckUtil::checkNotNull($this->requestTime,"requestTime");
		RequestCheckUtil::checkNotNull($this->signStr,"signStr");
		RequestCheckUtil::checkNotNull($this->targetOpCode,"targetOpCode");
		RequestCheckUtil::checkNotNull($this->targetUserId,"targetUserId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
