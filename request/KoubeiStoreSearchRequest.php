<?php
/**
 * TOP API: taobao.koubei.store.search request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class KoubeiStoreSearchRequest
{
	/** 
	 * 根据一级类目Id查找店铺，比如餐饮美食
	 **/
	private $cateId;
	
	/** 
	 * 城市id
	 **/
	private $cityId;
	
	/** 
	 * 页码，显示第page页的店铺。
	 **/
	private $pageNo;
	
	/** 
	 * 返回的店铺数
	 **/
	private $pageSize;
	
	/** 
	 * 平均消费,传入价格区间，整数用波浪线分隔
	 **/
	private $perPrice;
	
	/** 
	 * 关键词搜索时使用
	 **/
	private $q;
	
	/** 
	 * 需要定位搜索店铺时使用，以指定的xy为中心，（+-）range米范围内店铺。
	 **/
	private $range;
	
	/** 
	 * 根据店铺名搜索时使用，返回店铺名中带有storeName的店铺
	 **/
	private $storeName;
	
	/** 
	 * 根据二级类目Id查找店铺，比如中餐馆
	 **/
	private $subcateId;
	
	/** 
	 * 需要定位搜索店铺时使用，经度,已经将经度的分秒转换成度的小数部分，最好精确到小数点后5位
	 **/
	private $x;
	
	/** 
	 * 需要定位搜索店铺时使用，纬度,已经将纬度的分秒转换成度的小数部分，最好精确到小数点后5位
	 **/
	private $y;
	
	private $apiParas = array();
	
	public function setCateId($cateId)
	{
		$this->cateId = $cateId;
		$this->apiParas["cate_id"] = $cateId;
	}

	public function getCateId()
	{
		return $this->cateId;
	}

	public function setCityId($cityId)
	{
		$this->cityId = $cityId;
		$this->apiParas["city_id"] = $cityId;
	}

	public function getCityId()
	{
		return $this->cityId;
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

	public function setPerPrice($perPrice)
	{
		$this->perPrice = $perPrice;
		$this->apiParas["per_price"] = $perPrice;
	}

	public function getPerPrice()
	{
		return $this->perPrice;
	}

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function setRange($range)
	{
		$this->range = $range;
		$this->apiParas["range"] = $range;
	}

	public function getRange()
	{
		return $this->range;
	}

	public function setStoreName($storeName)
	{
		$this->storeName = $storeName;
		$this->apiParas["store_name"] = $storeName;
	}

	public function getStoreName()
	{
		return $this->storeName;
	}

	public function setSubcateId($subcateId)
	{
		$this->subcateId = $subcateId;
		$this->apiParas["subcate_id"] = $subcateId;
	}

	public function getSubcateId()
	{
		return $this->subcateId;
	}

	public function setX($x)
	{
		$this->x = $x;
		$this->apiParas["x"] = $x;
	}

	public function getX()
	{
		return $this->x;
	}

	public function setY($y)
	{
		$this->y = $y;
		$this->apiParas["y"] = $y;
	}

	public function getY()
	{
		return $this->y;
	}

	public function getApiMethodName()
	{
		return "taobao.koubei.store.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->cateId,1000,"cateId");
		RequestCheckUtil::checkMinValue($this->cateId,1,"cateId");
		RequestCheckUtil::checkNotNull($this->cityId,"cityId");
		RequestCheckUtil::checkMaxValue($this->cityId,10000,"cityId");
		RequestCheckUtil::checkMinValue($this->cityId,1,"cityId");
		RequestCheckUtil::checkMaxValue($this->pageNo,50,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkMaxLength($this->perPrice,15,"perPrice");
		RequestCheckUtil::checkMaxLength($this->q,50,"q");
		RequestCheckUtil::checkMaxValue($this->range,10000,"range");
		RequestCheckUtil::checkMinValue($this->range,1,"range");
		RequestCheckUtil::checkMaxValue($this->subcateId,1000,"subcateId");
		RequestCheckUtil::checkMinValue($this->subcateId,1,"subcateId");
		RequestCheckUtil::checkMaxLength($this->x,10,"x");
		RequestCheckUtil::checkMaxLength($this->y,10,"y");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
