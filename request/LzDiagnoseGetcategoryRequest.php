<?php
/**
 * TOP API: taobao.lz.diagnose.getcategory request
 * 
 * @author auto create
 * @since 1.0, 2014-01-10 00:00:00
 */
class LzDiagnoseGetcategoryRequest
{
	/** 
	 * 店铺所属一级类目ID
	 **/
	private $categoryId;
	
	/** 
	 * 日期 dddd-dd-dd day=2013-02-10
	 **/
	private $day;
	
	/** 
	 * 店铺所属标价区间ID
	 **/
	private $priceSectionId;
	
	/** 
	 * 店铺类型
	 **/
	private $shopType;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function setDay($day)
	{
		$this->day = $day;
		$this->apiParas["day"] = $day;
	}

	public function getDay()
	{
		return $this->day;
	}

	public function setPriceSectionId($priceSectionId)
	{
		$this->priceSectionId = $priceSectionId;
		$this->apiParas["price_section_id"] = $priceSectionId;
	}

	public function getPriceSectionId()
	{
		return $this->priceSectionId;
	}

	public function setShopType($shopType)
	{
		$this->shopType = $shopType;
		$this->apiParas["shop_type"] = $shopType;
	}

	public function getShopType()
	{
		return $this->shopType;
	}

	public function getApiMethodName()
	{
		return "taobao.lz.diagnose.getcategory";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->day,"day");
		RequestCheckUtil::checkNotNull($this->priceSectionId,"priceSectionId");
		RequestCheckUtil::checkNotNull($this->shopType,"shopType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
