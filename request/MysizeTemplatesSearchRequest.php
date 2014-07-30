<?php
/**
 * TOP API: taobao.mysize.templates.search request
 * 
 * @author auto create
 * @since 1.0, 2012-07-18 00:00:00
 */
class MysizeTemplatesSearchRequest
{
	/** 
	 * 模板类型：服装、鞋子、文胸。依次是1、2、3
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.mysize.templates.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
