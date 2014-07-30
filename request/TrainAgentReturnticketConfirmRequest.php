<?php
/**
 * TOP API: taobao.train.agent.returnticket.confirm request
 * 
 * @author auto create
 * @since 1.0, 2013-09-26 00:00:00
 */
class TrainAgentReturnticketConfirmRequest
{
	/** 
	 * 代理商id
	 **/
	private $agentId;
	
	/** 
	 * 是否同意退票
	 **/
	private $agreeReturn;
	
	/** 
	 * 用户id
	 **/
	private $buyerId;
	
	/** 
	 * 淘宝主订单id
	 **/
	private $mainBizOrderId;
	
	/** 
	 * 退票金额，单位分
	 **/
	private $refundFee;
	
	/** 
	 * 买家已取票
	 **/
	private $refuseReturnReason;
	
	/** 
	 * 淘宝子订单id
	 **/
	private $subBizOrderId;
	
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

	public function setAgreeReturn($agreeReturn)
	{
		$this->agreeReturn = $agreeReturn;
		$this->apiParas["agree_return"] = $agreeReturn;
	}

	public function getAgreeReturn()
	{
		return $this->agreeReturn;
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

	public function setRefundFee($refundFee)
	{
		$this->refundFee = $refundFee;
		$this->apiParas["refund_fee"] = $refundFee;
	}

	public function getRefundFee()
	{
		return $this->refundFee;
	}

	public function setRefuseReturnReason($refuseReturnReason)
	{
		$this->refuseReturnReason = $refuseReturnReason;
		$this->apiParas["refuse_return_reason"] = $refuseReturnReason;
	}

	public function getRefuseReturnReason()
	{
		return $this->refuseReturnReason;
	}

	public function setSubBizOrderId($subBizOrderId)
	{
		$this->subBizOrderId = $subBizOrderId;
		$this->apiParas["sub_biz_order_id"] = $subBizOrderId;
	}

	public function getSubBizOrderId()
	{
		return $this->subBizOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.train.agent.returnticket.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->agreeReturn,"agreeReturn");
		RequestCheckUtil::checkNotNull($this->buyerId,"buyerId");
		RequestCheckUtil::checkNotNull($this->mainBizOrderId,"mainBizOrderId");
		RequestCheckUtil::checkNotNull($this->refundFee,"refundFee");
		RequestCheckUtil::checkNotNull($this->subBizOrderId,"subBizOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
