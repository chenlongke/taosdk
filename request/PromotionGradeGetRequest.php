<?php
/**
 * TOP API: taobao.promotion.grade.get request
 * 
 * @author auto create
 * @since 1.0, 2011-01-20 00:00:00
 */
class PromotionGradeGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.promotion.grade.get";
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
