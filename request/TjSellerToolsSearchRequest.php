<?php
/**
 * TOP API: taobao.tj.seller.tools.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class TjSellerToolsSearchRequest
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
	 * 自检工具类型信息
	 **/
	private $toolType;
	
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

	public function setToolType($toolType)
	{
		$this->toolType = $toolType;
		$this->apiParas["tool_type"] = $toolType;
	}

	public function getToolType()
	{
		return $this->toolType;
	}

	public function getApiMethodName()
	{
		return "taobao.tj.seller.tools.search";
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
		RequestCheckUtil::checkNotNull($this->toolType,"toolType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
