<?php
/**
 * TOP API: taobao.qianniu.activity.my.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-30 00:00:00
 */
class QianniuActivityMyGetRequest
{
	/** 
	 * 上一页最后一条记录的排序字段
	 **/
	private $lastValue;
	
	/** 
	 * 每页长度
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setLastValue($lastValue)
	{
		$this->lastValue = $lastValue;
		$this->apiParas["last_value"] = $lastValue;
	}

	public function getLastValue()
	{
		return $this->lastValue;
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
		return "taobao.qianniu.activity.my.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
