<?php
/**
 * TOP API: taobao.jianghu.awards.get request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class JianghuAwardsGetRequest
{
	/** 
	 * 类目id
	 **/
	private $categoryId;
	
	/** 
	 * 当前页，由于是分页获取数据
	 **/
	private $currentPage;
	
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

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.awards.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
