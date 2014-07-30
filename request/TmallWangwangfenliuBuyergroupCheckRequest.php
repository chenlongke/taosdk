<?php
/**
 * TOP API: tmall.wangwangfenliu.buyergroup.check request
 * 
 * @author auto create
 * @since 1.0, 2012-10-26 00:00:00
 */
class TmallWangwangfenliuBuyergroupCheckRequest
{
	/** 
	 * 买家名单列表，以逗号分隔,最大数量为100。
	 **/
	private $buyerList;
	
	/** 
	 * 商家id
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setBuyerList($buyerList)
	{
		$this->buyerList = $buyerList;
		$this->apiParas["buyer_list"] = $buyerList;
	}

	public function getBuyerList()
	{
		return $this->buyerList;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.buyergroup.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerList,"buyerList");
		RequestCheckUtil::checkMaxLength($this->buyerList,6400,"buyerList");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkMaxLength($this->sellerId,64,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
