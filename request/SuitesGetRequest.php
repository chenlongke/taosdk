<?php
/**
 * TOP API: taobao.suites.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class SuitesGetRequest
{
	/** 
	 * 需要获取的字段列表，不传默认为id,nick,suite_name,start_date,end_date
	 **/
	private $fields;
	
	/** 
	 * 用户订购服务的服务码(申请服务的时候会得到)
	 **/
	private $serviceCode;
	
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

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function getApiMethodName()
	{
		return "taobao.suites.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->serviceCode,"serviceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
