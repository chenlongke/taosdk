<?php
/**
 * TOP API: taobao.vas.service.validate request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class VasServiceValidateRequest
{
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	/** 
	 * 服务编码
	 **/
	private $servCode;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setServCode($servCode)
	{
		$this->servCode = $servCode;
		$this->apiParas["serv_code"] = $servCode;
	}

	public function getServCode()
	{
		return $this->servCode;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.service.validate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkNotNull($this->servCode,"servCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
