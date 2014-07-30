<?php
/**
 * TOP API: tmall.wangwangfenliu.config.createproperties request
 * 
 * @author auto create
 * @since 1.0, 2013-09-02 00:00:00
 */
class TmallWangwangfenliuConfigCreatepropertiesRequest
{
	/** 
	 * 以JSON格式提供的全局配置项键值对
	 **/
	private $configs;
	
	private $apiParas = array();
	
	public function setConfigs($configs)
	{
		$this->configs = $configs;
		$this->apiParas["configs"] = $configs;
	}

	public function getConfigs()
	{
		return $this->configs;
	}

	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.config.createproperties";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->configs,"configs");
		RequestCheckUtil::checkMaxLength($this->configs,1000,"configs");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
