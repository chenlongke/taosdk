<?php
/**
 * TOP API: taobao.simba.adgroupcrowd.add request
 * 
 * @author auto create
 * @since 1.0, 2014-04-16 00:00:00
 */
class SimbaAdgroupcrowdAddRequest
{
	/** 
	 * 推广组id
	 **/
	private $adgroupid;
	
	/** 
	 * 推广人群包名
	 **/
	private $crowdname;
	
	/** 
	 * 出价/溢价
宝贝搜索为溢价  范围0~300    
例如： 10   代表含义为溢价10%
宝贝定向为出价  范围5~9999  （单位:分）
例如：100  代表人民币  1元
	 **/
	private $maxprice;
	
	/** 
	 * 昵称
	 **/
	private $nick;
	
	/** 
	 * 选项标签组合的 json
例如：
[{"tagId":"100000","optionGroupId":"1000","value":"0"},
{"tagId":"100001","optionGroupId":"1001","value":"1"},
{"tagId":"100002","optionGroupId":"1002","value":"1"}]
	 **/
	private $selecttagoptionsjson;
	
	private $apiParas = array();
	
	public function setAdgroupid($adgroupid)
	{
		$this->adgroupid = $adgroupid;
		$this->apiParas["adgroupid"] = $adgroupid;
	}

	public function getAdgroupid()
	{
		return $this->adgroupid;
	}

	public function setCrowdname($crowdname)
	{
		$this->crowdname = $crowdname;
		$this->apiParas["crowdname"] = $crowdname;
	}

	public function getCrowdname()
	{
		return $this->crowdname;
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

	public function setSelecttagoptionsjson($selecttagoptionsjson)
	{
		$this->selecttagoptionsjson = $selecttagoptionsjson;
		$this->apiParas["selecttagoptionsjson"] = $selecttagoptionsjson;
	}

	public function getSelecttagoptionsjson()
	{
		return $this->selecttagoptionsjson;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.adgroupcrowd.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupid,"adgroupid");
		RequestCheckUtil::checkNotNull($this->crowdname,"crowdname");
		RequestCheckUtil::checkNotNull($this->maxprice,"maxprice");
		RequestCheckUtil::checkNotNull($this->selecttagoptionsjson,"selecttagoptionsjson");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
