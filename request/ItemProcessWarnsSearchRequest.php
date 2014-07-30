<?php
/**
 * TOP API: taobao.item.process.warns.search request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class ItemProcessWarnsSearchRequest
{
	/** 
	 * 记录创建时间
	 **/
	private $gmtCreate;
	
	/** 
	 * 搜索时是否自动merge优化/提醒/处罚详细记录，默认为false，如果需要AdviseDetail、WarnDetail、PunishDetail中的值，请设置为true
	 **/
	private $mergeDetail;
	
	/** 
	 * 页码。取值范围:大于零的整数。默认值为1,即默认返回第一页数据。
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数;最大值：100；默认值：50
	 **/
	private $pageSize;
	
	/** 
	 * 违规大类Code
	 **/
	private $ruleType;
	
	/** 
	 * 主排序字段排序方式，默认倒叙
	 **/
	private $sortAsc;
	
	/** 
	 * 主排序字段，返回结果按照此字段排序，取值范围：gmt_start，gmt_end，gmt_create
	 **/
	private $sortField;
	
	/** 
	 * 处理记录状态：1：系统处理；2：卖家编辑；3：审核失败
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setGmtCreate($gmtCreate)
	{
		$this->gmtCreate = $gmtCreate;
		$this->apiParas["gmt_create"] = $gmtCreate;
	}

	public function getGmtCreate()
	{
		return $this->gmtCreate;
	}

	public function setMergeDetail($mergeDetail)
	{
		$this->mergeDetail = $mergeDetail;
		$this->apiParas["merge_detail"] = $mergeDetail;
	}

	public function getMergeDetail()
	{
		return $this->mergeDetail;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.item.process.warns.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
