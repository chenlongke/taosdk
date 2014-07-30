<?php
/**
 * TOP API: taobao.kefu.satisfactions.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-08 00:00:00
 */
class KefuSatisfactionsGetRequest
{
	/** 
	 * 满意度创建的截止时间
	 **/
	private $createDateEnd;
	
	/** 
	 * 满意度反馈时间的起始时间
	 **/
	private $createDateStart;
	
	/** 
	 * 选取记录的页码
	 **/
	private $pageNum;
	
	/** 
	 * 一页的大小
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCreateDateEnd($createDateEnd)
	{
		$this->createDateEnd = $createDateEnd;
		$this->apiParas["create_date_end"] = $createDateEnd;
	}

	public function getCreateDateEnd()
	{
		return $this->createDateEnd;
	}

	public function setCreateDateStart($createDateStart)
	{
		$this->createDateStart = $createDateStart;
		$this->apiParas["create_date_start"] = $createDateStart;
	}

	public function getCreateDateStart()
	{
		return $this->createDateStart;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
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

	public function getApiMethodName()
	{
		return "taobao.kefu.satisfactions.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->createDateEnd,"createDateEnd");
		RequestCheckUtil::checkNotNull($this->createDateStart,"createDateStart");
		RequestCheckUtil::checkMinValue($this->pageNum,1,"pageNum");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
