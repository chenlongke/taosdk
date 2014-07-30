<?php
/**
 * TOP API: taobao.gamecenter.tradeorder.createtradeorder request
 * 
 * @author auto create
 * @since 1.0, 2014-01-08 00:00:00
 */
class GamecenterTradeorderCreatetradeorderRequest
{
	/** 
	 * 访问token
	 **/
	private $accesstoken;
	
	/** 
	 * 商品id
	 **/
	private $auctionid;
	
	/** 
	 * 购买数量
	 **/
	private $buynum;
	
	/** 
	 * 游戏外部订单号
	 **/
	private $cooporderid;
	
	/** 
	 * 扩展信息
	 **/
	private $extendinfo;
	
	/** 
	 * 卡id
	 **/
	private $sid;
	
	/** 
	 * 客户端渠道id
	 **/
	private $ttid;
	
	/** 
	 * 用户数字id
	 **/
	private $userid;
	
	/** 
	 * 用户昵称
	 **/
	private $usernick;
	
	private $apiParas = array();
	
	public function setAccesstoken($accesstoken)
	{
		$this->accesstoken = $accesstoken;
		$this->apiParas["accesstoken"] = $accesstoken;
	}

	public function getAccesstoken()
	{
		return $this->accesstoken;
	}

	public function setAuctionid($auctionid)
	{
		$this->auctionid = $auctionid;
		$this->apiParas["auctionid"] = $auctionid;
	}

	public function getAuctionid()
	{
		return $this->auctionid;
	}

	public function setBuynum($buynum)
	{
		$this->buynum = $buynum;
		$this->apiParas["buynum"] = $buynum;
	}

	public function getBuynum()
	{
		return $this->buynum;
	}

	public function setCooporderid($cooporderid)
	{
		$this->cooporderid = $cooporderid;
		$this->apiParas["cooporderid"] = $cooporderid;
	}

	public function getCooporderid()
	{
		return $this->cooporderid;
	}

	public function setExtendinfo($extendinfo)
	{
		$this->extendinfo = $extendinfo;
		$this->apiParas["extendinfo"] = $extendinfo;
	}

	public function getExtendinfo()
	{
		return $this->extendinfo;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setTtid($ttid)
	{
		$this->ttid = $ttid;
		$this->apiParas["ttid"] = $ttid;
	}

	public function getTtid()
	{
		return $this->ttid;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function setUsernick($usernick)
	{
		$this->usernick = $usernick;
		$this->apiParas["usernick"] = $usernick;
	}

	public function getUsernick()
	{
		return $this->usernick;
	}

	public function getApiMethodName()
	{
		return "taobao.gamecenter.tradeorder.createtradeorder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accesstoken,"accesstoken");
		RequestCheckUtil::checkNotNull($this->auctionid,"auctionid");
		RequestCheckUtil::checkNotNull($this->cooporderid,"cooporderid");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
		RequestCheckUtil::checkNotNull($this->usernick,"usernick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
