<?php
/**
 * TOP API: taobao.item.process.shield.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class ItemProcessShieldGetRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 4:屏蔽,5:降权
	 **/
	private $processType;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setProcessType($processType)
	{
		$this->processType = $processType;
		$this->apiParas["process_type"] = $processType;
	}

	public function getProcessType()
	{
		return $this->processType;
	}

	public function getApiMethodName()
	{
		return "taobao.item.process.shield.get";
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
