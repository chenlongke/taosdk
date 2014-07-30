<?php
/**
 * TOP API: taobao.idleapi.items.onsale.get request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class IdleapiItemsOnsaleGetRequest
{
	/** 
	 * 是否包含查询该卖家发布的闲置拍卖宝贝，默认为false
	 **/
	private $includeAuction;
	
	/** 
	 * 当前页码，page=1或者0，都表示第一页。
	 **/
	private $page;
	
	/** 
	 * 每页返回的结果数，一次请求不能超过100
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setIncludeAuction($includeAuction)
	{
		$this->includeAuction = $includeAuction;
		$this->apiParas["include_auction"] = $includeAuction;
	}

	public function getIncludeAuction()
	{
		return $this->includeAuction;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
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
		return "taobao.idleapi.items.onsale.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkMaxValue($this->page,100,"page");
		RequestCheckUtil::checkMinValue($this->page,0,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,0,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
