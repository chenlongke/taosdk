<?php
/**
 * TOP API: taobao.hui.ltuan.promote request
 * 
 * @author auto create
 * @since 1.0, 2011-12-22 00:00:00
 */
class HuiLtuanPromoteRequest
{
	/** 
	 * 需要推荐或取消推荐的商品IDs列表
	 **/
	private $auctionIds;
	
	/** 
	 * true:推荐橱窗，false:取消推荐橱窗
	 **/
	private $promoted;
	
	private $apiParas = array();
	
	public function setAuctionIds($auctionIds)
	{
		$this->auctionIds = $auctionIds;
		$this->apiParas["auction_ids"] = $auctionIds;
	}

	public function getAuctionIds()
	{
		return $this->auctionIds;
	}

	public function setPromoted($promoted)
	{
		$this->promoted = $promoted;
		$this->apiParas["promoted"] = $promoted;
	}

	public function getPromoted()
	{
		return $this->promoted;
	}

	public function getApiMethodName()
	{
		return "taobao.hui.ltuan.promote";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionIds,"auctionIds");
		RequestCheckUtil::checkMaxListSize($this->auctionIds,30,"auctionIds");
		RequestCheckUtil::checkNotNull($this->promoted,"promoted");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
