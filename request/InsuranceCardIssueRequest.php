<?php
/**
 * TOP API: taobao.insurance.card.issue request
 * 
 * @author auto create
 * @since 1.0, 2013-11-18 00:00:00
 */
class InsuranceCardIssueRequest
{
	/** 
	 * 支付宝账号
	 **/
	private $alipayAccount;
	
	/** 
	 * 卡失效日期，格式yyyyMMdd
	 **/
	private $endDate;
	
	/** 
	 * 外部序列号，保证幂等
	 **/
	private $serialNumber;
	
	/** 
	 * 卡的生效日期，格式yyyyMMdd
	 **/
	private $startDate;
	
	/** 
	 * 淘宝userId
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setAlipayAccount($alipayAccount)
	{
		$this->alipayAccount = $alipayAccount;
		$this->apiParas["alipay_account"] = $alipayAccount;
	}

	public function getAlipayAccount()
	{
		return $this->alipayAccount;
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

	public function setSerialNumber($serialNumber)
	{
		$this->serialNumber = $serialNumber;
		$this->apiParas["serial_number"] = $serialNumber;
	}

	public function getSerialNumber()
	{
		return $this->serialNumber;
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
		return "taobao.insurance.card.issue";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alipayAccount,"alipayAccount");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->serialNumber,"serialNumber");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
