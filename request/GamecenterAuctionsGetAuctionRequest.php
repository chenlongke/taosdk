<?php
/**
 * TOP API: taobao.gamecenter.auctions.getAuction request
 * 
 * @author auto create
 * @since 1.0, 2014-01-08 00:00:00
 */
class GamecenterAuctionsGetAuctionRequest
{
	/** 
	 * 商品id号
	 **/
	private $auctionid;
	
	private $apiParas = array();
	
	public function setAuctionid($auctionid)
	{
		$this->auctionid = $auctionid;
		$this->apiParas["auctionid"] = $auctionid;
	}

	public function getAuctionid()
	{
		return $this->auctionid;
	}

	public function getApiMethodName()
	{
		return "taobao.gamecenter.auctions.getAuction";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionid,"auctionid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
