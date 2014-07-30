<?php
/**
 * TOP API: taobao.qianniu.activity.recommended.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-30 00:00:00
 */
class QianniuActivityRecommendedGetRequest
{
	/** 
	 * 上一页最后一条记录的排序字段值，如果不传表示取第一页数据
	 **/
	private $lastValue;
	
	/** 
	 * 每页记录数
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
		return "taobao.qianniu.activity.recommended.get";
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
