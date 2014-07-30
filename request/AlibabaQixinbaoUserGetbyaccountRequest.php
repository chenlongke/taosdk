<?php
/**
 * TOP API: alibaba.qixinbao.user.getbyaccount request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class AlibabaQixinbaoUserGetbyaccountRequest
{
	/** 
	 * 临时账号或正式账号
	 **/
	private $account;
	
	private $apiParas = array();
	
	public function setAccount($account)
	{
		$this->account = $account;
		$this->apiParas["account"] = $account;
	}

	public function getAccount()
	{
		return $this->account;
	}

	public function getApiMethodName()
	{
		return "alibaba.qixinbao.user.getbyaccount";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->account,"account");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
