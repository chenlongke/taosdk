<?php
/**
 * TOP API: taobao.train.agent.order.get request
 * 
 * @author auto create
 * @since 1.0, 2013-09-26 00:00:00
 */
class TrainAgentOrderGetRequest
{
	/** 
	 * 代理商id
	 **/
	private $agentId;
	
	/** 
	 * 淘宝的主订单号
	 **/
	private $mainOrderId;
	
	private $apiParas = array();
	
	public function setAgentId($agentId)
	{
		$this->agentId = $agentId;
		$this->apiParas["agent_id"] = $agentId;
	}

	public function getAgentId()
	{
		return $this->agentId;
	}

	public function setMainOrderId($mainOrderId)
	{
		$this->mainOrderId = $mainOrderId;
		$this->apiParas["main_order_id"] = $mainOrderId;
	}

	public function getMainOrderId()
	{
		return $this->mainOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.train.agent.order.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->mainOrderId,"mainOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
