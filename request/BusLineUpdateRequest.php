<?php
/**
 * TOP API: taobao.bus.line.update request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class BusLineUpdateRequest
{
	/** 
	 * 车型
	 **/
	private $busType;
	
	/** 
	 * 运行时间，单位：分钟
	 **/
	private $costTime;
	
	/** 
	 * 发车时间
	 **/
	private $departTime;
	
	/** 
	 * 运行距离，单位：千米
	 **/
	private $distance;
	
	/** 
	 * 流水发班的最后发车时间
	 **/
	private $lastScheduleTime;
	
	/** 
	 * 备注
	 **/
	private $note;
	
	/** 
	 * 价格，单位：分（人民币）
	 **/
	private $price;
	
	/** 
	 * 流水发班的发车间隔，单位分钟
	 **/
	private $scheduleGap;
	
	/** 
	 * 班次号
	 **/
	private $scheduleNumber;
	
	/** 
	 * 售卖状态
	 **/
	private $state;
	
	/** 
	 * 当前可售库存
	 **/
	private $stock;
	
	/** 
	 * 途经站
	 **/
	private $viaStations;
	
	private $apiParas = array();
	
	public function setBusType($busType)
	{
		$this->busType = $busType;
		$this->apiParas["bus_type"] = $busType;
	}

	public function getBusType()
	{
		return $this->busType;
	}

	public function setCostTime($costTime)
	{
		$this->costTime = $costTime;
		$this->apiParas["cost_time"] = $costTime;
	}

	public function getCostTime()
	{
		return $this->costTime;
	}

	public function setDepartTime($departTime)
	{
		$this->departTime = $departTime;
		$this->apiParas["depart_time"] = $departTime;
	}

	public function getDepartTime()
	{
		return $this->departTime;
	}

	public function setDistance($distance)
	{
		$this->distance = $distance;
		$this->apiParas["distance"] = $distance;
	}

	public function getDistance()
	{
		return $this->distance;
	}

	public function setLastScheduleTime($lastScheduleTime)
	{
		$this->lastScheduleTime = $lastScheduleTime;
		$this->apiParas["last_schedule_time"] = $lastScheduleTime;
	}

	public function getLastScheduleTime()
	{
		return $this->lastScheduleTime;
	}

	public function setNote($note)
	{
		$this->note = $note;
		$this->apiParas["note"] = $note;
	}

	public function getNote()
	{
		return $this->note;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setScheduleGap($scheduleGap)
	{
		$this->scheduleGap = $scheduleGap;
		$this->apiParas["schedule_gap"] = $scheduleGap;
	}

	public function getScheduleGap()
	{
		return $this->scheduleGap;
	}

	public function setScheduleNumber($scheduleNumber)
	{
		$this->scheduleNumber = $scheduleNumber;
		$this->apiParas["schedule_number"] = $scheduleNumber;
	}

	public function getScheduleNumber()
	{
		return $this->scheduleNumber;
	}

	public function setState($state)
	{
		$this->state = $state;
		$this->apiParas["state"] = $state;
	}

	public function getState()
	{
		return $this->state;
	}

	public function setStock($stock)
	{
		$this->stock = $stock;
		$this->apiParas["stock"] = $stock;
	}

	public function getStock()
	{
		return $this->stock;
	}

	public function setViaStations($viaStations)
	{
		$this->viaStations = $viaStations;
		$this->apiParas["via_stations"] = $viaStations;
	}

	public function getViaStations()
	{
		return $this->viaStations;
	}

	public function getApiMethodName()
	{
		return "taobao.bus.line.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scheduleNumber,"scheduleNumber");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
