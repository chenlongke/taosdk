<?php
/**
 * TOP API: taobao.qianniu.number.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class QianniuNumberGetRequest
{
	/** 
	 * 需要返回那些数据
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
		return "taobao.qianniu.number.get";
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
