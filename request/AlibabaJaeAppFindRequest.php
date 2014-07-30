<?php
/**
 * TOP API: alibaba.jae.app.find request
 * 
 * @author auto create
 * @since 1.0, 2014-03-11 00:00:00
 */
class AlibabaJaeAppFindRequest
{
	/** 
	 * 业务类型，支付宝公众平台是12
	 **/
	private $biztype;
	
	/** 
	 * 淘宝昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setBiztype($biztype)
	{
		$this->biztype = $biztype;
		$this->apiParas["biztype"] = $biztype;
	}

	public function getBiztype()
	{
		return $this->biztype;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "alibaba.jae.app.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->biztype,"biztype");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
