<?php
/**
 * TOP API: taobao.bus.tickets.rule.add request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class BusTicketsRuleAddRequest
{
	/** 
	 * 西大望路88号八王坟汽车站
	 **/
	private $collectTicketPlace;
	
	/** 
	 * 取票时间
	 **/
	private $collectTicketTime;
	
	/** 
	 * 取票方式
	 **/
	private $collectTicketType;
	
	/** 
	 * 出发城市
	 **/
	private $departCity;
	
	/** 
	 * 始发站
	 **/
	private $departStation;
	
	private $apiParas = array();
	
	public function setCollectTicketPlace($collectTicketPlace)
	{
		$this->collectTicketPlace = $collectTicketPlace;
		$this->apiParas["collect_ticket_place"] = $collectTicketPlace;
	}

	public function getCollectTicketPlace()
	{
		return $this->collectTicketPlace;
	}

	public function setCollectTicketTime($collectTicketTime)
	{
		$this->collectTicketTime = $collectTicketTime;
		$this->apiParas["collect_ticket_time"] = $collectTicketTime;
	}

	public function getCollectTicketTime()
	{
		return $this->collectTicketTime;
	}

	public function setCollectTicketType($collectTicketType)
	{
		$this->collectTicketType = $collectTicketType;
		$this->apiParas["collect_ticket_type"] = $collectTicketType;
	}

	public function getCollectTicketType()
	{
		return $this->collectTicketType;
	}

	public function setDepartCity($departCity)
	{
		$this->departCity = $departCity;
		$this->apiParas["depart_city"] = $departCity;
	}

	public function getDepartCity()
	{
		return $this->departCity;
	}

	public function setDepartStation($departStation)
	{
		$this->departStation = $departStation;
		$this->apiParas["depart_station"] = $departStation;
	}

	public function getDepartStation()
	{
		return $this->departStation;
	}

	public function getApiMethodName()
	{
		return "taobao.bus.tickets.rule.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->collectTicketPlace,"collectTicketPlace");
		RequestCheckUtil::checkNotNull($this->collectTicketTime,"collectTicketTime");
		RequestCheckUtil::checkNotNull($this->collectTicketType,"collectTicketType");
		RequestCheckUtil::checkNotNull($this->departCity,"departCity");
		RequestCheckUtil::checkNotNull($this->departStation,"departStation");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
