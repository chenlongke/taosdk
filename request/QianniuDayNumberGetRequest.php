<?php
/**
 * TOP API: taobao.qianniu.day.number.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-10 00:00:00
 */
class QianniuDayNumberGetRequest
{
	/** 
	 * 需要获取那些字段的信息
	 **/
	private $fields;
	
	private $apiParas = array();
	
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
		return "taobao.qianniu.day.number.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
