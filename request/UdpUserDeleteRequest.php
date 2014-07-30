<?php
/**
 * TOP API: taobao.udp.user.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-02-29 00:00:00
 */
class UdpUserDeleteRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.udp.user.delete";
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
