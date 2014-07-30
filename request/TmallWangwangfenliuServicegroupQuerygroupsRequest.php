<?php
/**
 * TOP API: tmall.wangwangfenliu.servicegroup.querygroups request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class TmallWangwangfenliuServicegroupQuerygroupsRequest
{
	/** 
	 * 商家id
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
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
		return "tmall.wangwangfenliu.servicegroup.querygroups";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkMaxLength($this->sellerId,64,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
