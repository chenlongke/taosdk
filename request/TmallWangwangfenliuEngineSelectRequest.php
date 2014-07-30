<?php
/**
 * TOP API: tmall.wangwangfenliu.engine.select request
 * 
 * @author auto create
 * @since 1.0, 2012-10-25 00:00:00
 */
class TmallWangwangfenliuEngineSelectRequest
{
	/** 
	 * engine序号：(2权重分流,5规则分流)
	 **/
	private $engineId;
	
	/** 
	 * 商家id
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setEngineId($engineId)
	{
		$this->engineId = $engineId;
		$this->apiParas["engine_id"] = $engineId;
	}

	public function getEngineId()
	{
		return $this->engineId;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.engine.select";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->engineId,"engineId");
		RequestCheckUtil::checkMaxLength($this->engineId,2,"engineId");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkMaxLength($this->sellerId,64,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
