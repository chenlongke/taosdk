<?php
/**
 * TOP API: taobao.simba.adgroupcrowd.price.update request
 * 
 * @author auto create
 * @since 1.0, 2014-04-16 00:00:00
 */
class SimbaAdgroupcrowdPriceUpdateRequest
{
	/** 
	 * 推广组人群id
	 **/
	private $adgroupcrowdid;
	
	/** 
	 * 推广组id
	 **/
	private $adgroupid;
	
	/** 
	 * 宝贝定向为出价【范围5~9999  （单位:分）】
	 **/
	private $maxprice;
	
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

	public function setAdgroupid($adgroupid)
	{
		$this->adgroupid = $adgroupid;
		$this->apiParas["adgroupid"] = $adgroupid;
	}

	public function getAdgroupid()
	{
		return $this->adgroupid;
	}

	public function setMaxprice($maxprice)
	{
		$this->maxprice = $maxprice;
		$this->apiParas["maxprice"] = $maxprice;
	}

	public function getMaxprice()
	{
		return $this->maxprice;
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
		return "taobao.simba.adgroupcrowd.price.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupcrowdid,"adgroupcrowdid");
		RequestCheckUtil::checkNotNull($this->adgroupid,"adgroupid");
		RequestCheckUtil::checkNotNull($this->maxprice,"maxprice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
