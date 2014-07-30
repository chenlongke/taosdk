<?php
/**
 * TOP API: taobao.juwliserver.schedule.add request
 * 
 * @author auto create
 * @since 1.0, 2012-11-12 00:00:00
 */
class JuwliserverScheduleAddRequest
{
	/** 
	 * 预下单动态值
	 **/
	private $dynamic;
	
	/** 
	 * 字段值拼装的字符串格式
key1:value1,key2:value2
	 **/
	private $fields;
	
	private $apiParas = array();
	
	public function setDynamic($dynamic)
	{
		$this->dynamic = $dynamic;
		$this->apiParas["dynamic"] = $dynamic;
	}

	public function getDynamic()
	{
		return $this->dynamic;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getApiMethodName()
	{
		return "taobao.juwliserver.schedule.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dynamic,"dynamic");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
