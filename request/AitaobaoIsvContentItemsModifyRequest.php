<?php
/**
 * TOP API: taobao.aitaobao.isv.content.items.modify request
 * 
 * @author auto create
 * @since 1.0, 2014-03-27 00:00:00
 */
class AitaobaoIsvContentItemsModifyRequest
{
	/** 
	 * 内容id
	 **/
	private $id;
	
	/** 
	 * isv小站为内容设置对应宝贝id,最多30个宝贝id
	 **/
	private $items;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function getApiMethodName()
	{
		return "taobao.aitaobao.isv.content.items.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->items,"items");
		RequestCheckUtil::checkMaxListSize($this->items,30,"items");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
