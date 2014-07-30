<?php
/**
 * TOP API: taobao.tj.item.advises.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class TjItemAdvisesSearchRequest
{
	/** 
	 * 当前页码
	 **/
	private $pageNo;
	
	/** 
	 * 分页每页数量
	 **/
	private $pageSize;
	
	/** 
	 * 处罚方式ID.注意rule_type同punish_mode的筛选互斥，优先使用rule_type
	 **/
	private $punishMode;
	
	/** 
	 * 违规大类ID.注意rule_type同punish_mode的筛选互斥，优先使用rule_type
	 **/
	private $ruleType;
	
	/** 
	 * 是否按照 sort_field升序
	 **/
	private $sortAsc;
	
	/** 
	 * 排序字段.gmt_create, gmt_start, gmt_end三选一,默认为gmt_end
	 **/
	private $sortField;
	
	private $apiParas = array();
	
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

	public function setPunishMode($punishMode)
	{
		$this->punishMode = $punishMode;
		$this->apiParas["punish_mode"] = $punishMode;
	}

	public function getPunishMode()
	{
		return $this->punishMode;
	}

	public function setRuleType($ruleType)
	{
		$this->ruleType = $ruleType;
		$this->apiParas["rule_type"] = $ruleType;
	}

	public function getRuleType()
	{
		return $this->ruleType;
	}

	public function setSortAsc($sortAsc)
	{
		$this->sortAsc = $sortAsc;
		$this->apiParas["sort_asc"] = $sortAsc;
	}

	public function getSortAsc()
	{
		return $this->sortAsc;
	}

	public function setSortField($sortField)
	{
		$this->sortField = $sortField;
		$this->apiParas["sort_field"] = $sortField;
	}

	public function getSortField()
	{
		return $this->sortField;
	}

	public function getApiMethodName()
	{
		return "taobao.tj.item.advises.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
