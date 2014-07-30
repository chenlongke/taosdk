<?php
/**
 * TOP API: alipay.evercall.recharge.result.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-26 00:00:00
 */
class AlipayEvercallRechargeResultUpdateRequest
{
	/** 
	 * 支付宝给用户的授权。
	 **/
	private $authToken;
	
	/** 
	 * 充值明细
	 **/
	private $rechargeItems;
	
	private $apiParas = array();
	
	public function setAuthToken($authToken)
	{
		$this->authToken = $authToken;
		$this->apiParas["auth_token"] = $authToken;
	}

	public function getAuthToken()
	{
		return $this->authToken;
	}

	public function setRechargeItems($rechargeItems)
	{
		$this->rechargeItems = $rechargeItems;
		$this->apiParas["recharge_items"] = $rechargeItems;
	}

	public function getRechargeItems()
	{
		return $this->rechargeItems;
	}

	public function getApiMethodName()
	{
		return "alipay.evercall.recharge.result.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->authToken,"authToken");
		RequestCheckUtil::checkNotNull($this->rechargeItems,"rechargeItems");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
