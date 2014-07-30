<?php
/**
 * TOP API: taobao.wlb.item.consignment.create request
 * 
 * @author auto create
 * @since 1.0, 2013-10-25 00:00:00
 */
class WlbItemConsignmentCreateRequest
{
	/** 
	 * 淘宝宝贝id
	 **/
	private $icItemId;
	
	/** 
	 * 代销数量,如果不设置，则默认为货主授权时设置的授权数量
	 **/
	private $number;
	
	/** 
	 * 货主商品id
	 **/
	private $ownerItemId;
	
	/** 
	 * 货主昵称
	 **/
	private $ownerUserNick;
	
	/** 
	 * 通过taobao.wlb.item.authorization.add接口创建后得到的rule_id，规则中设定了代销商可以代销的商品数量
	 **/
	private $ruleId;
	
	private $apiParas = array();
	
	public function setIcItemId($icItemId)
	{
		$this->icItemId = $icItemId;
		$this->apiParas["ic_item_id"] = $icItemId;
	}

	public function getIcItemId()
	{
		return $this->icItemId;
	}

	public function setNumber($number)
	{
		$this->number = $number;
		$this->apiParas["number"] = $number;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function setOwnerItemId($ownerItemId)
	{
		$this->ownerItemId = $ownerItemId;
		$this->apiParas["owner_item_id"] = $ownerItemId;
	}

	public function getOwnerItemId()
	{
		return $this->ownerItemId;
	}

	public function setOwnerUserNick($ownerUserNick)
	{
		$this->ownerUserNick = $ownerUserNick;
		$this->apiParas["owner_user_nick"] = $ownerUserNick;
	}

	public function getOwnerUserNick()
	{
		return $this->ownerUserNick;
	}

	public function setRuleId($ruleId)
	{
		$this->ruleId = $ruleId;
		$this->apiParas["rule_id"] = $ruleId;
	}

	public function getRuleId()
	{
		return $this->ruleId;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.item.consignment.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->icItemId,"icItemId");
		RequestCheckUtil::checkNotNull($this->ownerItemId,"ownerItemId");
		RequestCheckUtil::checkNotNull($this->ownerUserNick,"ownerUserNick");
		RequestCheckUtil::checkNotNull($this->ruleId,"ruleId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
