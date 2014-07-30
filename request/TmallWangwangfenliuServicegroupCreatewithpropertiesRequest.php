<?php
/**
 * TOP API: tmall.wangwangfenliu.servicegroup.createwithproperties request
 * 
 * @author auto create
 * @since 1.0, 2013-01-24 00:00:00
 */
class TmallWangwangfenliuServicegroupCreatewithpropertiesRequest
{
	/** 
	 * 服务分组名称
	 **/
	private $groupName;
	
	/** 
	 * 设定属性值：propert1:value1;propert2:value2
	 **/
	private $properties;
	
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

	public function setProperties($properties)
	{
		$this->properties = $properties;
		$this->apiParas["properties"] = $properties;
	}

	public function getProperties()
	{
		return $this->properties;
	}

	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.servicegroup.createwithproperties";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkMaxLength($this->groupName,64,"groupName");
		RequestCheckUtil::checkMaxLength($this->properties,5000,"properties");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
