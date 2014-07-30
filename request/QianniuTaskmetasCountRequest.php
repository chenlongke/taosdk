<?php
/**
 * TOP API: taobao.qianniu.taskmetas.count request
 * 
 * @author auto create
 * @since 1.0, 2013-12-30 00:00:00
 */
class QianniuTaskmetasCountRequest
{
	/** 
	 * 发起任务人的uid
	 **/
	private $senderUid;
	
	private $apiParas = array();
	
	public function setSenderUid($senderUid)
	{
		$this->senderUid = $senderUid;
		$this->apiParas["sender_uid"] = $senderUid;
	}

	public function getSenderUid()
	{
		return $this->senderUid;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.taskmetas.count";
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
