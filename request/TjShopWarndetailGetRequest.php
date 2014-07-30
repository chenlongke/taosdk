<?php
/**
 * TOP API: taobao.tj.shop.warndetail.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class TjShopWarndetailGetRequest
{
	/** 
	 * 店铺的记录ID
	 **/
	private $processId;
	
	private $apiParas = array();
	
	public function setProcessId($processId)
	{
		$this->processId = $processId;
		$this->apiParas["process_id"] = $processId;
	}

	public function getProcessId()
	{
		return $this->processId;
	}

	public function getApiMethodName()
	{
		return "taobao.tj.shop.warndetail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->processId,"processId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
