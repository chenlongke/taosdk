<?php
/**
 * TOP API: alibaba.wangqi.organization.user.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class AlibabaWangqiOrganizationUserGetRequest
{
	/** 
	 * 用户账号
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
		return "alibaba.wangqi.organization.user.get";
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
