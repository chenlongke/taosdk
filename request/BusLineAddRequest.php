<?php
/**
 * TOP API: taobao.bus.line.add request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class BusLineAddRequest
{
	/** 
	 * 到达城市
	 **/
	private $arriveCity;
	
	/** 
	 * 到达省份
	 **/
	private $arriveProvince;
	
	/** 
	 * 到达车站
	 **/
	private $arriveStation;
	
	/** 
	 * 车型
	 **/
	private $busType;
	
	/** 
	 * 运行时间，单位：分钟
	 **/
	private $costTime;
	
	/** 
	 * 出发城市
	 **/
	private $departCity;
	
	/** 
	 * 出发日期,，例如2014-02-14
	 **/
	private $departDate;
	
	/** 
	 * 出发省份
	 **/
	private $departProvince;
	
	/** 
	 * 出发车站
	 **/
	private $departStation;
	
	/** 
	 * 发车时间，例如10:30
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
	 * 发班模式，0-定时发班，1-流水发班
	 **/
	private $scheduleType;
	
	/** 
	 * 当前可售库存
	 **/
	private $stock;
	
	/** 
	 * 途经站
	 **/
	private $viaStations;
	
	private $apiParas = array();
	
	public function setArriveCity($arriveCity)
	{
		$this->arriveCity = $arriveCity;
		$this->apiParas["arrive_city"] = $arriveCity;
	}

	public function getArriveCity()
	{
		return $this->arriveCity;
	}

	public function setArriveProvince($arriveProvince)
	{
		$this->arriveProvince = $arriveProvince;
		$this->apiParas["arrive_province"] = $arriveProvince;
	}

	public function getArriveProvince()
	{
		return $this->arriveProvince;
	}

	public function setArriveStation($arriveStation)
	{
		$this->arriveStation = $arriveStation;
		$this->apiParas["arrive_station"] = $arriveStation;
	}

	public function getArriveStation()
	{
		return $this->arriveStation;
	}

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

	public function setDepartCity($departCity)
	{
		$this->departCity = $departCity;
		$this->apiParas["depart_city"] = $departCity;
	}

	public function getDepartCity()
	{
		return $this->departCity;
	}

	public function setDepartDate($departDate)
	{
		$this->departDate = $departDate;
		$this->apiParas["depart_date"] = $departDate;
	}

	public function getDepartDate()
	{
		return $this->departDate;
	}

	public function setDepartProvince($departProvince)
	{
		$this->departProvince = $departProvince;
		$this->apiParas["depart_province"] = $departProvince;
	}

	public function getDepartProvince()
	{
		return $this->departProvince;
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

	public function setScheduleType($scheduleType)
	{
		$this->scheduleType = $scheduleType;
		$this->apiParas["schedule_type"] = $scheduleType;
	}

	public function getScheduleType()
	{
		return $this->scheduleType;
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
		return "taobao.bus.line.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->arriveCity,"arriveCity");
		RequestCheckUtil::checkMaxLength($this->arriveCity,128,"arriveCity");
		RequestCheckUtil::checkNotNull($this->arriveProvince,"arriveProvince");
		RequestCheckUtil::checkMaxLength($this->arriveProvince,64,"arriveProvince");
		RequestCheckUtil::checkMaxLength($this->arriveStation,128,"arriveStation");
		RequestCheckUtil::checkNotNull($this->departCity,"departCity");
		RequestCheckUtil::checkMaxLength($this->departCity,128,"departCity");
		RequestCheckUtil::checkNotNull($this->departDate,"departDate");
		RequestCheckUtil::checkMaxLength($this->departDate,16,"departDate");
		RequestCheckUtil::checkNotNull($this->departProvince,"departProvince");
		RequestCheckUtil::checkMaxLength($this->departProvince,64,"departProvince");
		RequestCheckUtil::checkNotNull($this->departStation,"departStation");
		RequestCheckUtil::checkMaxLength($this->departStation,128,"departStation");
		RequestCheckUtil::checkNotNull($this->departTime,"departTime");
		RequestCheckUtil::checkMaxLength($this->departTime,8,"departTime");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkNotNull($this->scheduleNumber,"scheduleNumber");
		RequestCheckUtil::checkMaxLength($this->scheduleNumber,128,"scheduleNumber");
		RequestCheckUtil::checkNotNull($this->scheduleType,"scheduleType");
		RequestCheckUtil::checkNotNull($this->stock,"stock");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
