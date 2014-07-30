<?php
/**
 * TOP API: alibaba.wangqi.organization.tree.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class AlibabaWangqiOrganizationTreeGetRequest
{
	/** 
	 * 版本号
	 **/
	private $version;
	
	private $apiParas = array();
	
	public function setVersion($version)
	{
		$this->version = $version;
		$this->apiParas["version"] = $version;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getApiMethodName()
	{
		return "alibaba.wangqi.organization.tree.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->version,"version");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
