<?php
/**
 * TOP API: taobao.wlb.syncrule.update request
 * 
 * @author auto create
 * @since 1.0, 2011-03-28 00:00:00
 */
class WlbSyncruleUpdateRequest
{
	/** 
	 * 按库存分配机制定规则
	 **/
	private $assignType;
	
	/** 
	 * 库存同步ID
	 **/
	private $id;
	
	/** 
	 * 按库存类型定规则
	 **/
	private $inventTypes;
	
	/** 
	 * 按仓库定规则
	 **/
	private $storeCodes;
	
	/** 
	 * 用户nick
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setAssignType($assignType)
	{
		$this->assignType = $assignType;
		$this->apiParas["assign_type"] = $assignType;
	}

	public function getAssignType()
	{
		return $this->assignType;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setInventTypes($inventTypes)
	{
		$this->inventTypes = $inventTypes;
		$this->apiParas["invent_types"] = $inventTypes;
	}

	public function getInventTypes()
	{
		return $this->inventTypes;
	}

	public function setStoreCodes($storeCodes)
	{
		$this->storeCodes = $storeCodes;
		$this->apiParas["store_codes"] = $storeCodes;
	}

	public function getStoreCodes()
	{
		return $this->storeCodes;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.syncrule.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
