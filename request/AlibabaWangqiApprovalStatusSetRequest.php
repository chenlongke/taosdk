<?php
/**
 * TOP API: alibaba.wangqi.approval.status.set request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class AlibabaWangqiApprovalStatusSetRequest
{
	/** 
	 * 审批消息item_id
	 **/
	private $itemId;
	
	/** 
	 * STATUS_ACCEPT或STATUS_DENY
	 **/
	private $status;
	
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "alibaba.wangqi.approval.status.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
