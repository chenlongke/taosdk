<?php
/**
 * TOP API: taobao.udp.user.add request
 * 
 * @author auto create
 * @since 1.0, 2012-02-29 00:00:00
 */
class UdpUserAddRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.udp.user.add";
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
