<?php
/**
 * TOP API: taobao.vas.accout.alipay.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-15 00:00:00
 */
class VasAccoutAlipayGetRequest
{
	/** 
	 * 应用码
	 **/
	private $appCode;
	
	/** 
	 * 支付宝email
	 **/
	private $email;
	
	/** 
	 * 淘宝用户号
	 **/
	private $merchantUserId;
	
	/** 
	 * 操作码
	 **/
	private $opCode;
	
	/** 
	 * 外部签名
	 **/
	private $signAcc;
	
	/** 
	 * 支付宝userId
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setAppCode($appCode)
	{
		$this->appCode = $appCode;
		$this->apiParas["app_code"] = $appCode;
	}

	public function getAppCode()
	{
		return $this->appCode;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setMerchantUserId($merchantUserId)
	{
		$this->merchantUserId = $merchantUserId;
		$this->apiParas["merchant_user_id"] = $merchantUserId;
	}

	public function getMerchantUserId()
	{
		return $this->merchantUserId;
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

	public function setSignAcc($signAcc)
	{
		$this->signAcc = $signAcc;
		$this->apiParas["sign_acc"] = $signAcc;
	}

	public function getSignAcc()
	{
		return $this->signAcc;
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
		return "taobao.vas.accout.alipay.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appCode,"appCode");
		RequestCheckUtil::checkNotNull($this->opCode,"opCode");
		RequestCheckUtil::checkNotNull($this->signAcc,"signAcc");
		RequestCheckUtil::checkMaxLength($this->userId,20,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
