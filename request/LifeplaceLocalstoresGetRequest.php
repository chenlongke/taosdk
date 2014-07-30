<?php
/**
 * TOP API: taobao.lifeplace.localstores.get request
 * 
 * @author auto create
 * @since 1.0, 2012-09-10 00:00:00
 */
class LifeplaceLocalstoresGetRequest
{
	/** 
	 * 区域id
	 **/
	private $areaCode;
	
	/** 
	 * 类目id
	 **/
	private $category;
	
	/** 
	 * 城市id
	 **/
	private $city;
	
	/** 
	 * 当前页数
	 **/
	private $pageNo;
	
	/** 
	 * 每页店铺数
	 **/
	private $pageSize;
	
	/** 
	 * 查询关键字
	 **/
	private $querykey;
	
	private $apiParas = array();
	
	public function setAreaCode($areaCode)
	{
		$this->areaCode = $areaCode;
		$this->apiParas["area_code"] = $areaCode;
	}

	public function getAreaCode()
	{
		return $this->areaCode;
	}

	public function setCategory($category)
	{
		$this->category = $category;
		$this->apiParas["category"] = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
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

	public function setQuerykey($querykey)
	{
		$this->querykey = $querykey;
		$this->apiParas["querykey"] = $querykey;
	}

	public function getQuerykey()
	{
		return $this->querykey;
	}

	public function getApiMethodName()
	{
		return "taobao.lifeplace.localstores.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkMaxValue($this->pageNo,50,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,30,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
