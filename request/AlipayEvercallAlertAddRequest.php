<?php
/**
 * TOP API: alipay.evercall.alert.add request
 * 
 * @author auto create
 * @since 1.0, 2013-01-22 00:00:00
 */
class AlipayEvercallAlertAddRequest
{
	/** 
	 * 预警明细
	 **/
	private $alertItems;
	
	/** 
	 * 支付宝给用户的授权。
	 **/
	private $authToken;
	
	private $apiParas = array();
	
	public function setAlertItems($alertItems)
	{
		$this->alertItems = $alertItems;
		$this->apiParas["alert_items"] = $alertItems;
	}

	public function getAlertItems()
	{
		return $this->alertItems;
	}

	public function setAuthToken($authToken)
	{
		$this->authToken = $authToken;
		$this->apiParas["auth_token"] = $authToken;
	}

	public function getAuthToken()
	{
		return $this->authToken;
	}

	public function getApiMethodName()
	{
		return "alipay.evercall.alert.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alertItems,"alertItems");
		RequestCheckUtil::checkNotNull($this->authToken,"authToken");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
