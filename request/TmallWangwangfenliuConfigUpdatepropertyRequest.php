<?php
/**
 * TOP API: tmall.wangwangfenliu.config.updateproperty request
 * 
 * @author auto create
 * @since 1.0, 2013-09-02 00:00:00
 */
class TmallWangwangfenliuConfigUpdatepropertyRequest
{
	/** 
	 * 全局配置项名称
	 **/
	private $configkey;
	
	/** 
	 * 配置项待更新的值
	 **/
	private $configvalue;
	
	private $apiParas = array();
	
	public function setConfigkey($configkey)
	{
		$this->configkey = $configkey;
		$this->apiParas["configkey"] = $configkey;
	}

	public function getConfigkey()
	{
		return $this->configkey;
	}

	public function setConfigvalue($configvalue)
	{
		$this->configvalue = $configvalue;
		$this->apiParas["configvalue"] = $configvalue;
	}

	public function getConfigvalue()
	{
		return $this->configvalue;
	}

	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.config.updateproperty";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->configkey,"configkey");
		RequestCheckUtil::checkMaxLength($this->configkey,64,"configkey");
		RequestCheckUtil::checkNotNull($this->configvalue,"configvalue");
		RequestCheckUtil::checkMaxLength($this->configvalue,100,"configvalue");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
