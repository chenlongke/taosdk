<?php
/**
 * TOP API: taobao.simba.adgroupcrowd.tag.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-24 00:00:00
 */
class SimbaAdgroupcrowdTagGetRequest
{
	/** 
	 * 业务类型：1--宝贝搜索 2--宝贝定向
	 **/
	private $biztype;
	
	/** 
	 * 昵称
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
		return "taobao.simba.adgroupcrowd.tag.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->biztype,"biztype");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
