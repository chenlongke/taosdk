<?php
/**
 * TOP API: taobao.category.comment.vip.get request
 * 
 * @author auto create
 * @since 1.0, 2012-10-15 00:00:00
 */
class CategoryCommentVipGetRequest
{
	/** 
	 * 类目id
	 **/
	private $categoryId;
	
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

	public function getApiMethodName()
	{
		return "taobao.category.comment.vip.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
