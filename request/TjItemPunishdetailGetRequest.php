<?php
/**
 * TOP API: taobao.tj.item.punishdetail.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class TjItemPunishdetailGetRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 商品的类别。
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
		return "taobao.tj.item.punishdetail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->processType,"processType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
