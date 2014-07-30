<?php
/**
 * TOP API: taobao.poster.channels.get request
 * 
 * @author auto create
 * @since 1.0, 2013-02-26 00:00:00
 */
class PosterChannelsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.poster.channels.get";
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
