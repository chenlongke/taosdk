<?php
/**
 * TOP API: taobao.oto.member.card.get request
 * 
 * @author auto create
 * @since 1.0, 2014-01-17 00:00:00
 */
class OtoMemberCardGetRequest
{
	/** 
	 * 会员卡卡号
	 **/
	private $cardNum;
	
	private $apiParas = array();
	
	public function setCardNum($cardNum)
	{
		$this->cardNum = $cardNum;
		$this->apiParas["card_num"] = $cardNum;
	}

	public function getCardNum()
	{
		return $this->cardNum;
	}

	public function getApiMethodName()
	{
		return "taobao.oto.member.card.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cardNum,"cardNum");
		RequestCheckUtil::checkMaxLength($this->cardNum,30,"cardNum");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
