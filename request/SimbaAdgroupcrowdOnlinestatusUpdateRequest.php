<?php
/**
 * TOP API: taobao.simba.adgroupcrowd.onlinestatus.update request
 * 
 * @author auto create
 * @since 1.0, 2014-03-24 00:00:00
 */
class SimbaAdgroupcrowdOnlinestatusUpdateRequest
{
	/** 
	 * 人群id list
	 **/
	private $adgroupcrowdidlist;
	
	/** 
	 * 昵称
	 **/
	private $nick;
	
	/** 
	 * 1  推广（在线）  0 暂停（下线）
	 **/
	private $onlinestatus;
	
	private $apiParas = array();
	
	public function setAdgroupcrowdidlist($adgroupcrowdidlist)
	{
		$this->adgroupcrowdidlist = $adgroupcrowdidlist;
		$this->apiParas["adgroupcrowdidlist"] = $adgroupcrowdidlist;
	}

	public function getAdgroupcrowdidlist()
	{
		return $this->adgroupcrowdidlist;
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

	public function setOnlinestatus($onlinestatus)
	{
		$this->onlinestatus = $onlinestatus;
		$this->apiParas["onlinestatus"] = $onlinestatus;
	}

	public function getOnlinestatus()
	{
		return $this->onlinestatus;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.adgroupcrowd.onlinestatus.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupcrowdidlist,"adgroupcrowdidlist");
		RequestCheckUtil::checkMaxListSize($this->adgroupcrowdidlist,200,"adgroupcrowdidlist");
		RequestCheckUtil::checkNotNull($this->onlinestatus,"onlinestatus");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
