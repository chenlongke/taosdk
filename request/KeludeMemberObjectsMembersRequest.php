<?php
/**
 * TOP API: taobao.kelude.member.objects.members request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class KeludeMemberObjectsMembersRequest
{
	/** 
	 * 对象的id列表
	 **/
	private $targetIds;
	
	/** 
	 * 对象的类型，和角色的stamp字段对应
	 **/
	private $targetType;
	
	private $apiParas = array();
	
	public function setTargetIds($targetIds)
	{
		$this->targetIds = $targetIds;
		$this->apiParas["target_ids"] = $targetIds;
	}

	public function getTargetIds()
	{
		return $this->targetIds;
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
		return "taobao.kelude.member.objects.members";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->targetIds,"targetIds");
		RequestCheckUtil::checkMaxListSize($this->targetIds,100,"targetIds");
		RequestCheckUtil::checkNotNull($this->targetType,"targetType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
