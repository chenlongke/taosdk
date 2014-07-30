<?php
/**
 * TOP API: alibaba.qixinbao.applink.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class AlibabaQixinbaoApplinkGetRequest
{
	/** 
	 * 应用实例id
	 **/
	private $instanceId;
	
	private $apiParas = array();
	
	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->apiParas["instance_id"] = $instanceId;
	}

	public function getInstanceId()
	{
		return $this->instanceId;
	}

	public function getApiMethodName()
	{
		return "alibaba.qixinbao.applink.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
