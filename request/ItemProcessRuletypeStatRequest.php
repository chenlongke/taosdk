<?php
/**
 * TOP API: taobao.item.process.ruletype.stat request
 * 
 * @author auto create
 * @since 1.0, 2013-04-02 00:00:00
 */
class ItemProcessRuletypeStatRequest
{
	/** 
	 * 处理类型分为三种：1：处罚 2：提醒 3：优化
	 **/
	private $processType;
	
	private $apiParas = array();
	
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
		return "taobao.item.process.ruletype.stat";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->processType,"processType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
