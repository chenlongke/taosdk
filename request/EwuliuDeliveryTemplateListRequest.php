<?php
/**
 * TOP API: taobao.ewuliu.delivery.template.list request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class EwuliuDeliveryTemplateListRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.ewuliu.delivery.template.list";
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
