<?php
/**
 * TOP API: taobao.item.update.rules.get request
 * 
 * @author auto create
 * @since 1.0, 2013-11-27 00:00:00
 */
class ItemUpdateRulesGetRequest
{
	/** 
	 * 在编辑商品时候，当需要重新选择类目的时候，传入变更后的类目id,否则。不要传入
	 **/
	private $categoryId;
	
	/** 
	 * 需要编辑的商品id
	 **/
	private $itemId;
	
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

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function getApiMethodName()
	{
		return "taobao.item.update.rules.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
