<?php
/**
 * TOP API: taobao.crm.grade.next.get request
 * 
 * @author auto create
 * @since 1.0, 2013-08-21 00:00:00
 */
class CrmGradeNextGetRequest
{
	/** 
	 * 买家的Nick
	 **/
	private $buyerNick;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.grade.next.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
