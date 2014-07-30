<?php
/**
 * TOP API: taobao.juwliserver.brand.item.bycode.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class JuwliserverBrandItemBycodeGetRequest
{
	/** 
	 * 品牌商品code
	 **/
	private $brandCode;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页商品数量
	 **/
	private $pageSize;
	
	/** 
	 * 客户端请求类型
	 **/
	private $requestType;
	
	private $apiParas = array();
	
	public function setBrandCode($brandCode)
	{
		$this->brandCode = $brandCode;
		$this->apiParas["brand_code"] = $brandCode;
	}

	public function getBrandCode()
	{
		return $this->brandCode;
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

	public function setRequestType($requestType)
	{
		$this->requestType = $requestType;
		$this->apiParas["request_type"] = $requestType;
	}

	public function getRequestType()
	{
		return $this->requestType;
	}

	public function getApiMethodName()
	{
		return "taobao.juwliserver.brand.item.bycode.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->brandCode,"brandCode");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
