<?php
/**
 * TOP API: taobao.security.nq.loginprotection request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class SecurityNqLoginprotectionRequest
{
	/** 
	 * 0 设置 1 查看
	 **/
	private $action;
	
	private $apiParas = array();
	
	public function setAction($action)
	{
		$this->action = $action;
		$this->apiParas["action"] = $action;
	}

	public function getAction()
	{
		return $this->action;
	}

	public function getApiMethodName()
	{
		return "taobao.security.nq.loginprotection";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->action,"action");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
