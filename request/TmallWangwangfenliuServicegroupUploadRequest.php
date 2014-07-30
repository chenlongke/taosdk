<?php
/**
 * TOP API: tmall.wangwangfenliu.servicegroup.upload request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class TmallWangwangfenliuServicegroupUploadRequest
{
	/** 
	 * 服务分组名称
	 **/
	private $groupName;
	
	/** 
	 * 商家id
	 **/
	private $sellerId;
	
	/** 
	 * 成员列表,包括权重
	 **/
	private $wwServicelist;
	
	private $apiParas = array();
	
	public function setGroupName($groupName)
	{
		$this->groupName = $groupName;
		$this->apiParas["group_name"] = $groupName;
	}

	public function getGroupName()
	{
		return $this->groupName;
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

	public function setWwServicelist($wwServicelist)
	{
		$this->wwServicelist = $wwServicelist;
		$this->apiParas["ww_servicelist"] = $wwServicelist;
	}

	public function getWwServicelist()
	{
		return $this->wwServicelist;
	}

	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.servicegroup.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkMaxLength($this->groupName,64,"groupName");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkMaxLength($this->sellerId,64,"sellerId");
		RequestCheckUtil::checkNotNull($this->wwServicelist,"wwServicelist");
		RequestCheckUtil::checkMaxLength($this->wwServicelist,5000,"wwServicelist");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
