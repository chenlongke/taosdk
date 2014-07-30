<?php
/**
 * TOP API: taobao.kelude.company.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class KeludeCompanySearchRequest
{
	/** 
	 * 公司名，模糊匹配，不传时输出所有有效的公司
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
		return "taobao.kelude.company.search";
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
