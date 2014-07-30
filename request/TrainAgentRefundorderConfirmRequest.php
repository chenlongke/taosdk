<?php
/**
 * TOP API: taobao.train.agent.refundorder.confirm request
 * 
 * @author auto create
 * @since 1.0, 2013-09-26 00:00:00
 */
class TrainAgentRefundorderConfirmRequest
{
	/** 
	 * 代理商id
	 **/
	private $agentId;
	
	/** 
	 * 退款是否同意
	 **/
	private $agreeRefund;
	
	/** 
	 * 买家id
	 **/
	private $buyerId;
	
	/** 
	 * 订单id
	 **/
	private $mainBizOrderId;
	
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

	public function setAgreeRefund($agreeRefund)
	{
		$this->agreeRefund = $agreeRefund;
		$this->apiParas["agree_refund"] = $agreeRefund;
	}

	public function getAgreeRefund()
	{
		return $this->agreeRefund;
	}

	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setMainBizOrderId($mainBizOrderId)
	{
		$this->mainBizOrderId = $mainBizOrderId;
		$this->apiParas["main_biz_order_id"] = $mainBizOrderId;
	}

	public function getMainBizOrderId()
	{
		return $this->mainBizOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.train.agent.refundorder.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->agreeRefund,"agreeRefund");
		RequestCheckUtil::checkNotNull($this->buyerId,"buyerId");
		RequestCheckUtil::checkNotNull($this->mainBizOrderId,"mainBizOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
