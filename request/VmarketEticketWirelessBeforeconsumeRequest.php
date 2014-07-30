<?php
/**
 * TOP API: taobao.vmarket.eticket.wireless.beforeconsume request
 * 
 * @author auto create
 * @since 1.0, 2012-12-28 00:00:00
 */
class VmarketEticketWirelessBeforeconsumeRequest
{
	/** 
	 * 字符串“user_id:111,operator_id:111,code:222222,buyer_mobile:2365,bizcode:kfbkfd”的加密串
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.eticket.wireless.beforeconsume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
