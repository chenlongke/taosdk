<?php
/**
 * TOP API: taobao.hui.ltuan.delete request
 * 
 * @author auto create
 * @since 1.0, 2011-12-22 00:00:00
 */
class HuiLtuanDeleteRequest
{
	/** 
	 * 需要删除的本地团商品IDs列表
	 **/
	private $auctionIds;
	
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

	public function getApiMethodName()
	{
		return "taobao.hui.ltuan.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionIds,"auctionIds");
		RequestCheckUtil::checkMaxListSize($this->auctionIds,30,"auctionIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
