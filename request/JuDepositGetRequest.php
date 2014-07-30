<?php
/**
 * TOP API: taobao.ju.deposit.get request
 * 
 * @author auto create
 * @since 1.0, 2013-07-25 00:00:00
 */
class JuDepositGetRequest
{
	/** 
	 * 保证金编号
	 **/
	private $depositId;
	
	private $apiParas = array();
	
	public function setDepositId($depositId)
	{
		$this->depositId = $depositId;
		$this->apiParas["deposit_id"] = $depositId;
	}

	public function getDepositId()
	{
		return $this->depositId;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.deposit.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->depositId,"depositId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
