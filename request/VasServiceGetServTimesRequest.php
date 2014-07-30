<?php
/**
 * TOP API: taobao.vas.service.getServTimes request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class VasServiceGetServTimesRequest
{
	/** 
	 * 服务编码
	 **/
	private $servCode;
	
	private $apiParas = array();
	
	public function setServCode($servCode)
	{
		$this->servCode = $servCode;
		$this->apiParas["serv_code"] = $servCode;
	}

	public function getServCode()
	{
		return $this->servCode;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.service.getServTimes";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->servCode,"servCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
