<?php
/**
 * TOP API: taobao.vas.accout.journals.get request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class VasAccoutJournalsGetRequest
{
	/** 
	 * 外部个性化支付宝操作备
	 **/
	private $alipayDescriptions;
	
	/** 
	 * 应用编码
	 **/
	private $appCode;
	
	/** 
	 * 资产类型
	 **/
	private $balanceType;
	
	/** 
	 * 区分充值类型
	 **/
	private $bizType;
	
	/** 
	 * 外部个性化账本操作备
	 **/
	private $descriptions;
	
	/** 
	 * 结束时间
	 **/
	private $endDate;
	
	/** 
	 * 开始时间
	 **/
	private $fromDate;
	
	/** 
	 * 流水类型
	 **/
	private $journalType;
	
	/** 
	 * 操作码
	 **/
	private $opCode;
	
	/** 
	 * 当前页
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
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

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
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

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setFromDate($fromDate)
	{
		$this->fromDate = $fromDate;
		$this->apiParas["from_date"] = $fromDate;
	}

	public function getFromDate()
	{
		return $this->fromDate;
	}

	public function setJournalType($journalType)
	{
		$this->journalType = $journalType;
		$this->apiParas["journal_type"] = $journalType;
	}

	public function getJournalType()
	{
		return $this->journalType;
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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
		return "taobao.vas.accout.journals.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appCode,"appCode");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->fromDate,"fromDate");
		RequestCheckUtil::checkNotNull($this->opCode,"opCode");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->requestTime,"requestTime");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
