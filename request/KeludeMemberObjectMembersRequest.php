<?php
/**
 * TOP API: taobao.kelude.member.object.members request
 * 
 * @author auto create
 * @since 1.0, 2014-04-10 00:00:00
 */
class KeludeMemberObjectMembersRequest
{
	/** 
	 * 对象的id
	 **/
	private $targetId;
	
	/** 
	 * 对象的类型，和角色表的stamp字段对应
	 **/
	private $targetType;
	
	private $apiParas = array();
	
	public function setTargetId($targetId)
	{
		$this->targetId = $targetId;
		$this->apiParas["target_id"] = $targetId;
	}

	public function getTargetId()
	{
		return $this->targetId;
	}

	public function setTargetType($targetType)
	{
		$this->targetType = $targetType;
		$this->apiParas["target_type"] = $targetType;
	}

	public function getTargetType()
	{
		return $this->targetType;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.member.object.members";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->targetId,"targetId");
		RequestCheckUtil::checkNotNull($this->targetType,"targetType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
