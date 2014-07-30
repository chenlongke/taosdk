<?php
/**
 * TOP API: taobao.idleapi.items.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-17 00:00:00
 */
class IdleapiItemsGetRequest
{
	/** 
	 * 宝贝id列表，逗号分隔
	 **/
	private $itemIds;
	
	private $apiParas = array();
	
	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function getApiMethodName()
	{
		return "taobao.idleapi.items.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemIds,"itemIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
