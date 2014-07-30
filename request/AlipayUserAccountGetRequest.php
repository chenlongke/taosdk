<?php
/**
 * TOP API: alipay.user.account.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-20 00:00:00
 */
class AlipayUserAccountGetRequest
{
	/** 
	 * 支付宝给用户的授权。如果没有top的授权，这个字段是必填项
	 **/
	private $authToken;
	
	/** 
	 * 需要返回的字段列表。alipay_user_id：支付宝用户userId,total_amount：余额,available_amount：可用余额,freeze_amount：冻结金额
	 **/
	private $fields;
	
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

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getApiMethodName()
	{
		return "alipay.user.account.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
