<?php
/**
 * TOP API: taobao.ju.subscribe.area.recommends.get request
 * 
 * @author auto create
 * @since 1.0, 2013-01-21 00:00:00
 */
class JuSubscribeAreaRecommendsGetRequest
{
	/** 
	 * 排除的id列表
	 **/
	private $excludes;
	
	private $apiParas = array();
	
	public function setExcludes($excludes)
	{
		$this->excludes = $excludes;
		$this->apiParas["excludes"] = $excludes;
	}

	public function getExcludes()
	{
		return $this->excludes;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.subscribe.area.recommends.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->excludes,7,"excludes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
