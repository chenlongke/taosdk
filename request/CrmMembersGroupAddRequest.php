<?php
/**
 * TOP API: taobao.crm.members.group.add request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class CrmMembersGroupAddRequest
{
	/** 
	 * 买家的Nick
	 **/
	private $buyerNick;
	
	/** 
	 * 分组id
	 **/
	private $groupIds;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setGroupIds($groupIds)
	{
		$this->groupIds = $groupIds;
		$this->apiParas["group_ids"] = $groupIds;
	}

	public function getGroupIds()
	{
		return $this->groupIds;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.members.group.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->groupIds,"groupIds");
		RequestCheckUtil::checkMaxListSize($this->groupIds,10,"groupIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
