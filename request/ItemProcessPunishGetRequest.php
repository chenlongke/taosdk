<?php
/**
 * TOP API: taobao.item.process.punish.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-02 00:00:00
 */
class ItemProcessPunishGetRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 1:下架,6:删除
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
		return "taobao.item.process.punish.get";
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
