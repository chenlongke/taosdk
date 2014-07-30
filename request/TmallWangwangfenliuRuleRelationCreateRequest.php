<?php
/**
 * TOP API: tmall.wangwangfenliu.rule.relation.create request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class TmallWangwangfenliuRuleRelationCreateRequest
{
	/** 
	 * 买家分组
	 **/
	private $buyerGroup;
	
	/** 
	 * 优先级为小数格式的字符串
	 **/
	private $priority;
	
	/** 
	 * 服务分组
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

	public function setPriority($priority)
	{
		$this->priority = $priority;
		$this->apiParas["priority"] = $priority;
	}

	public function getPriority()
	{
		return $this->priority;
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
		return "tmall.wangwangfenliu.rule.relation.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerGroup,"buyerGroup");
		RequestCheckUtil::checkMaxLength($this->buyerGroup,64,"buyerGroup");
		RequestCheckUtil::checkNotNull($this->priority,"priority");
		RequestCheckUtil::checkMaxLength($this->priority,6,"priority");
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
