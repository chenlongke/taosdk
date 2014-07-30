<?php
/**
 * TOP API: taobao.taohua.latestupdateinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-18 00:00:00
 */
class TaohuaLatestupdateinfoGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.taohua.latestupdateinfo.get";
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
