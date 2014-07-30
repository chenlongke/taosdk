<?php
/**
 * TOP API: taobao.juwliserver.schedule.join request
 * 
 * @author auto create
 * @since 1.0, 2012-10-31 00:00:00
 */
class JuwliserverScheduleJoinRequest
{
	/** 
	 * 聚划算id
	 **/
	private $juId;
	
	/** 
	 * IPHONE,WAP,ANDROID,SINA,163 各种终端类型
	 **/
	private $terminalType;
	
	private $apiParas = array();
	
	public function setJuId($juId)
	{
		$this->juId = $juId;
		$this->apiParas["ju_id"] = $juId;
	}

	public function getJuId()
	{
		return $this->juId;
	}

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
		$this->apiParas["terminal_type"] = $terminalType;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function getApiMethodName()
	{
		return "taobao.juwliserver.schedule.join";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->juId,"juId");
		RequestCheckUtil::checkNotNull($this->terminalType,"terminalType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
