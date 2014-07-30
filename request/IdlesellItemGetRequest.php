<?php
/**
 * TOP API: taobao.idlesell.item.get request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class IdlesellItemGetRequest
{
	/** 
	 * 是否需要返回宝贝详情描述
	 **/
	private $hasDesc;
	
	/** 
	 * 是否需要返回宝贝图片
	 **/
	private $hasPic;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setHasDesc($hasDesc)
	{
		$this->hasDesc = $hasDesc;
		$this->apiParas["has_desc"] = $hasDesc;
	}

	public function getHasDesc()
	{
		return $this->hasDesc;
	}

	public function setHasPic($hasPic)
	{
		$this->hasPic = $hasPic;
		$this->apiParas["has_pic"] = $hasPic;
	}

	public function getHasPic()
	{
		return $this->hasPic;
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
		return "taobao.idlesell.item.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->hasDesc,"hasDesc");
		RequestCheckUtil::checkNotNull($this->hasPic,"hasPic");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
