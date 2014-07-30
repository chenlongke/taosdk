<?php
/**
 * TOP API: taobao.member.syncservice.get request
 * 
 * @author auto create
 * @since 1.0, 2013-09-12 00:00:00
 */
class MemberSyncserviceGetRequest
{
	/** 
	 * 一次请求的数据量
	 **/
	private $pageSize;
	
	/** 
	 * 查找的开始标志
	 **/
	private $startRow;
	
	private $apiParas = array();
	
	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartRow($startRow)
	{
		$this->startRow = $startRow;
		$this->apiParas["start_row"] = $startRow;
	}

	public function getStartRow()
	{
		return $this->startRow;
	}

	public function getApiMethodName()
	{
		return "taobao.member.syncservice.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,200,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->startRow,"startRow");
		RequestCheckUtil::checkMinValue($this->startRow,1,"startRow");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
