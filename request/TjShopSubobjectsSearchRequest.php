<?php
/**
 * TOP API: taobao.tj.shop.subobjects.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class TjShopSubobjectsSearchRequest
{
	/** 
	 * 标题关键词
	 **/
	private $keyword;
	
	/** 
	 * 当前页
	 **/
	private $pageNo;
	
	/** 
	 * 分页信息
	 **/
	private $pageSize;
	
	/** 
	 * 处罚ID信息
	 **/
	private $subToken;
	
	/** 
	 * 处罚方式
	 **/
	private $subType;
	
	private $apiParas = array();
	
	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
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

	public function setSubToken($subToken)
	{
		$this->subToken = $subToken;
		$this->apiParas["sub_token"] = $subToken;
	}

	public function getSubToken()
	{
		return $this->subToken;
	}

	public function setSubType($subType)
	{
		$this->subType = $subType;
		$this->apiParas["sub_type"] = $subType;
	}

	public function getSubType()
	{
		return $this->subType;
	}

	public function getApiMethodName()
	{
		return "taobao.tj.shop.subobjects.search";
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
		RequestCheckUtil::checkNotNull($this->subToken,"subToken");
		RequestCheckUtil::checkNotNull($this->subType,"subType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
