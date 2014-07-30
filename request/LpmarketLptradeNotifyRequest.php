<?php
/**
 * TOP API: taobao.lpmarket.lptrade.notify request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class LpmarketLptradeNotifyRequest
{
	/** 
	 * 物流公司编码
	 **/
	private $companyCode;
	
	/** 
	 * 物流公司运单号
	 **/
	private $mailNo;
	
	/** 
	 * 外部交易单号
	 **/
	private $outerTradeId;
	
	private $apiParas = array();
	
	public function setCompanyCode($companyCode)
	{
		$this->companyCode = $companyCode;
		$this->apiParas["company_code"] = $companyCode;
	}

	public function getCompanyCode()
	{
		return $this->companyCode;
	}

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setOuterTradeId($outerTradeId)
	{
		$this->outerTradeId = $outerTradeId;
		$this->apiParas["outer_trade_id"] = $outerTradeId;
	}

	public function getOuterTradeId()
	{
		return $this->outerTradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.lpmarket.lptrade.notify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyCode,"companyCode");
		RequestCheckUtil::checkNotNull($this->mailNo,"mailNo");
		RequestCheckUtil::checkNotNull($this->outerTradeId,"outerTradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
