<?php
/**
 * TOP API: taobao.taocode.get request
 * 
 * @author auto create
 * @since 1.0, 2011-05-17 00:00:00
 */
class TaocodeGetRequest
{
	/** 
	 * 淘代码详情
	 **/
	private $taoCode;
	
	private $apiParas = array();
	
	public function setTaoCode($taoCode)
	{
		$this->taoCode = $taoCode;
		$this->apiParas["tao_code"] = $taoCode;
	}

	public function getTaoCode()
	{
		return $this->taoCode;
	}

	public function getApiMethodName()
	{
		return "taobao.taocode.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->taoCode,"taoCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
