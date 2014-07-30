<?php
/**
 * TOP API: tmall.oto.right.record request
 * 
 * @author auto create
 * @since 1.0, 2013-02-26 00:00:00
 */
class TmallOtoRightRecordRequest
{
	/** 
	 * 线下商品的商品类型
	 **/
	private $auctionType;
	
	/** 
	 * 天魔官方权益卡号id
	 **/
	private $cardId;
	
	/** 
	 * 交易价格，请转化到分做单位
	 **/
	private $money;
	
	/** 
	 * 线下合作门店的售货员的淘宝操作帐号
	 **/
	private $operactorId;
	
	/** 
	 * 天魔官方权益卡密
	 **/
	private $password;
	
	/** 
	 * 线下的交易类型
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setAuctionType($auctionType)
	{
		$this->auctionType = $auctionType;
		$this->apiParas["auction_type"] = $auctionType;
	}

	public function getAuctionType()
	{
		return $this->auctionType;
	}

	public function setCardId($cardId)
	{
		$this->cardId = $cardId;
		$this->apiParas["card_id"] = $cardId;
	}

	public function getCardId()
	{
		return $this->cardId;
	}

	public function setMoney($money)
	{
		$this->money = $money;
		$this->apiParas["money"] = $money;
	}

	public function getMoney()
	{
		return $this->money;
	}

	public function setOperactorId($operactorId)
	{
		$this->operactorId = $operactorId;
		$this->apiParas["operactor_id"] = $operactorId;
	}

	public function getOperactorId()
	{
		return $this->operactorId;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "tmall.oto.right.record";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionType,"auctionType");
		RequestCheckUtil::checkNotNull($this->cardId,"cardId");
		RequestCheckUtil::checkNotNull($this->money,"money");
		RequestCheckUtil::checkNotNull($this->operactorId,"operactorId");
		RequestCheckUtil::checkNotNull($this->password,"password");
		RequestCheckUtil::checkNotNull($this->tradeType,"tradeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
