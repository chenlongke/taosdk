<?php
/**
 * TOP API: taobao.ts.property.get request
 * 
 * @author auto create
 * @since 1.0, 2013-05-07 00:00:00
 */
class TsPropertyGetRequest
{
	/** 
	 * 服务收费项code
	 **/
	private $serviceItemCode;
	
	private $apiParas = array();
	
	public function setServiceItemCode($serviceItemCode)
	{
		$this->serviceItemCode = $serviceItemCode;
		$this->apiParas["service_item_code"] = $serviceItemCode;
	}

	public function getServiceItemCode()
	{
		return $this->serviceItemCode;
	}

	public function getApiMethodName()
	{
		return "taobao.ts.property.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->serviceItemCode,"serviceItemCode");
		RequestCheckUtil::checkMaxLength($this->serviceItemCode,64,"serviceItemCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
