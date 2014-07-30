<?php
/**
 * TOP API: taobao.logistics.mailno.modify request
 * 
 * @author auto create
 * @since 1.0, 2013-05-20 00:00:00
 */
class LogisticsMailnoModifyRequest
{
	/** 
	 * 新的运单号
	 **/
	private $newMailNo;
	
	/** 
	 * 订单淘宝交易号
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setNewMailNo($newMailNo)
	{
		$this->newMailNo = $newMailNo;
		$this->apiParas["new_mail_no"] = $newMailNo;
	}

	public function getNewMailNo()
	{
		return $this->newMailNo;
	}

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.mailno.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->newMailNo,"newMailNo");
		RequestCheckUtil::checkMaxLength($this->newMailNo,50,"newMailNo");
		RequestCheckUtil::checkNotNull($this->tradeId,"tradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
