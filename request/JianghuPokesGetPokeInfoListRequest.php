<?php
/**
 * TOP API: taobao.jianghu.pokes.getPokeInfoList request
 * 
 * @author auto create
 * @since 1.0, 2011-09-13 00:00:00
 */
class JianghuPokesGetPokeInfoListRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.jianghu.pokes.getPokeInfoList";
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
