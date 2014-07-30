<?php
/**
 * TOP API: taobao.security.nq.accountlock request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class SecurityNqAccountlockRequest
{
	/** 
	 * 0 锁定 1 解锁 2 查看
	 **/
	private $action;
	
	/** 
	 * 逗号分隔
	 **/
	private $lock;
	
	/** 
	 * 64位
	 **/
	private $securityKey;
	
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

	public function setLock($lock)
	{
		$this->lock = $lock;
		$this->apiParas["lock"] = $lock;
	}

	public function getLock()
	{
		return $this->lock;
	}

	public function setSecurityKey($securityKey)
	{
		$this->securityKey = $securityKey;
		$this->apiParas["security_key"] = $securityKey;
	}

	public function getSecurityKey()
	{
		return $this->securityKey;
	}

	public function getApiMethodName()
	{
		return "taobao.security.nq.accountlock";
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
