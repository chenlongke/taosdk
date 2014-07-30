<?php
/**
 * TOP API: tmall.wangwangfenliu.rule.relation.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class TmallWangwangfenliuRuleRelationDeleteRequest
{
	/** 
	 * 买家分组名
	 **/
	private $buyerGroup;
	
	/** 
	 * 服务分组名
	 **/
	private $sellerGroup;
	
	/** 
	 * 商家id
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setBuyerGroup($buyerGroup)
	{
		$this->buyerGroup = $buyerGroup;
		$this->apiParas["buyer_group"] = $buyerGroup;
	}

	public function getBuyerGroup()
	{
		return $this->buyerGroup;
	}

	public function setSellerGroup($sellerGroup)
	{
		$this->sellerGroup = $sellerGroup;
		$this->apiParas["seller_group"] = $sellerGroup;
	}

	public function getSellerGroup()
	{
		return $this->sellerGroup;
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
		return "tmall.wangwangfenliu.rule.relation.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerGroup,"buyerGroup");
		RequestCheckUtil::checkMaxLength($this->buyerGroup,64,"buyerGroup");
		RequestCheckUtil::checkNotNull($this->sellerGroup,"sellerGroup");
		RequestCheckUtil::checkMaxLength($this->sellerGroup,64,"sellerGroup");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkMaxLength($this->sellerId,64,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
