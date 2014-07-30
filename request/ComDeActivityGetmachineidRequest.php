<?php
/**
 * TOP API: com.de.activity.getmachineid request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class ComDeActivityGetmachineidRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "com.de.activity.getmachineid";
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
