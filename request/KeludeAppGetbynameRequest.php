<?php
/**
 * TOP API: taobao.kelude.app.getbyname request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class KeludeAppGetbynameRequest
{
	/** 
	 * 应用名
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.app.getbyname";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
