<?php
/**
 * TOP API: taobao.tstar.model.search request
 * 
 * @author auto create
 * @since 1.0, 2012-06-25 00:00:00
 */
class TstarModelSearchRequest
{
	/** 
	 * 城市
	 **/
	private $city;
	
	/** 
	 * 代言
	 **/
	private $daiyan;
	
	/** 
	 * 女郎等级
	 **/
	private $modelLevel;
	
	/** 
	 * 女郎真名或者昵称
	 **/
	private $modelName;
	
	/** 
	 * 当前页
	 **/
	private $pageNo;
	
	/** 
	 * 每页数量
	 **/
	private $pageSize;
	
	/** 
	 * 排序方式1:活跃度倒排序 2：建立时间倒排序
	 **/
	private $sortType;
	
	/** 
	 * 风格
	 **/
	private $style;
	
	private $apiParas = array();
	
	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setDaiyan($daiyan)
	{
		$this->daiyan = $daiyan;
		$this->apiParas["daiyan"] = $daiyan;
	}

	public function getDaiyan()
	{
		return $this->daiyan;
	}

	public function setModelLevel($modelLevel)
	{
		$this->modelLevel = $modelLevel;
		$this->apiParas["model_level"] = $modelLevel;
	}

	public function getModelLevel()
	{
		return $this->modelLevel;
	}

	public function setModelName($modelName)
	{
		$this->modelName = $modelName;
		$this->apiParas["model_name"] = $modelName;
	}

	public function getModelName()
	{
		return $this->modelName;
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

	public function setSortType($sortType)
	{
		$this->sortType = $sortType;
		$this->apiParas["sort_type"] = $sortType;
	}

	public function getSortType()
	{
		return $this->sortType;
	}

	public function setStyle($style)
	{
		$this->style = $style;
		$this->apiParas["style"] = $style;
	}

	public function getStyle()
	{
		return $this->style;
	}

	public function getApiMethodName()
	{
		return "taobao.tstar.model.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageNo,100,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkNotNull($this->sortType,"sortType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
