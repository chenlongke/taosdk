<?php
/**
 * TOP API: taobao.ju.deposit.freeze request
 * 
 * @author auto create
 * @since 1.0, 2013-07-25 00:00:00
 */
class JuDepositFreezeRequest
{
	/** 
	 * 贷款金额
	 **/
	private $amount;
	
	/** 
	 * 保证金编号
	 **/
	private $depositId;
	
	/** 
	 * 支用编号
	 **/
	private $drawndnNo;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function setDepositId($depositId)
	{
		$this->depositId = $depositId;
		$this->apiParas["deposit_id"] = $depositId;
	}

	public function getDepositId()
	{
		return $this->depositId;
	}

	public function setDrawndnNo($drawndnNo)
	{
		$this->drawndnNo = $drawndnNo;
		$this->apiParas["drawndn_no"] = $drawndnNo;
	}

	public function getDrawndnNo()
	{
		return $this->drawndnNo;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.deposit.freeze";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
		RequestCheckUtil::checkNotNull($this->depositId,"depositId");
		RequestCheckUtil::checkNotNull($this->drawndnNo,"drawndnNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
