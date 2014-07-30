<?php
/**
 * TOP API: taobao.jianghu.coins.sum request
 * 
 * @author auto create
 * @since 1.0, 2014-02-18 00:00:00
 */
class JianghuCoinsSumRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.jianghu.coins.sum";
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
