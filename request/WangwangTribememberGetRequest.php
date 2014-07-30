<?php
/**
 * TOP API: taobao.wangwang.tribemember.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class WangwangTribememberGetRequest
{
	/** 
	 * 群ID
	 **/
	private $tribeId;
	
	private $apiParas = array();
	
	public function setTribeId($tribeId)
	{
		$this->tribeId = $tribeId;
		$this->apiParas["tribe_id"] = $tribeId;
	}

	public function getTribeId()
	{
		return $this->tribeId;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.tribemember.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tribeId,"tribeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
