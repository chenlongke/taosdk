<?php
/**
 * TOP API: taobao.simba.adgroupcrowd.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class SimbaAdgroupcrowdDeleteRequest
{
	/** 
	 * 推广人群包id
	 **/
	private $adgroupcrowdid;
	
	/** 
	 * 昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdgroupcrowdid($adgroupcrowdid)
	{
		$this->adgroupcrowdid = $adgroupcrowdid;
		$this->apiParas["adgroupcrowdid"] = $adgroupcrowdid;
	}

	public function getAdgroupcrowdid()
	{
		return $this->adgroupcrowdid;
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
		return "taobao.simba.adgroupcrowd.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupcrowdid,"adgroupcrowdid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
