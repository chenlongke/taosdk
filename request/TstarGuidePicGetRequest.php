<?php
/**
 * TOP API: taobao.tstar.guide.pic.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-25 00:00:00
 */
class TstarGuidePicGetRequest
{
	/** 
	 * 返回条数，最大1000
	 **/
	private $pageSize;
	
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

	public function getApiMethodName()
	{
		return "taobao.tstar.guide.pic.get";
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
