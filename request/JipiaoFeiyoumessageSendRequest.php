<?php
/**
 * TOP API: taobao.jipiao.feiyoumessage.send request
 * 
 * @author auto create
 * @since 1.0, 2013-10-17 00:00:00
 */
class JipiaoFeiyoumessageSendRequest
{
	/** 
	 * 乘坐机型机龄
	 **/
	private $mmsAirAge;
	
	/** 
	 * 乘机机型
	 **/
	private $mmsAirModel;
	
	/** 
	 * 备降城市
	 **/
	private $mmsAltCity;
	
	/** 
	 * 到达机场
	 **/
	private $mmsArrAirport;
	
	/** 
	 * 值机柜台
	 **/
	private $mmsArrAirportCheckIn;
	
	/** 
	 * 到达城市
	 **/
	private $mmsArrCity;
	
	/** 
	 * 出发城市天气预报
	 **/
	private $mmsArrCityWeather;
	
	/** 
	 * 到达机场流量情况
	 **/
	private $mmsArrPortTraffic;
	
	/** 
	 * 到达机场天气
	 **/
	private $mmsArrPortWeather;
	
	/** 
	 * 到达机场问询电话
	 **/
	private $mmsArrTelephone;
	
	/** 
	 * 到达航站楼
	 **/
	private $mmsArrTerminal;
	
	/** 
	 * 实际到达时间
	 **/
	private $mmsArriveActual;
	
	/** 
	 * 预计到达时间
	 **/
	private $mmsArriveEstimated;
	
	/** 
	 * 计划到达时间
	 **/
	private $mmsArriveScheduled;
	
	/** 
	 * 到达经停地时间
	 **/
	private $mmsArriveStopActual;
	
	/** 
	 * 延误可能性
	 **/
	private $mmsDelayPossibility;
	
	/** 
	 * 出发机场
	 **/
	private $mmsDepAirport;
	
	/** 
	 * 登机口
	 **/
	private $mmsDepAirportGate;
	
	/** 
	 * 出发城市
	 **/
	private $mmsDepCity;
	
	/** 
	 * 目的城市天气预报
	 **/
	private $mmsDepCityWeather;
	
	/** 
	 * 出发机场流量情况
	 **/
	private $mmsDepPortTraffic;
	
	/** 
	 * 出发机场天气
	 **/
	private $mmsDepPortWeather;
	
	/** 
	 * 出发机场问询电话
	 **/
	private $mmsDepTelephone;
	
	/** 
	 * 出发航站楼
	 **/
	private $mmsDepTerminal;
	
	/** 
	 * 实际起飞时间
	 **/
	private $mmsDepartActual;
	
	/** 
	 * 预计起飞时间
	 **/
	private $mmsDepartEstimated;
	
	/** 
	 * 计划起飞时间
	 **/
	private $mmsDepartScheduled;
	
	/** 
	 * 从经停地起飞时间
	 **/
	private $mmsDepartStopActual;
	
	/** 
	 * 航班日期
	 **/
	private $mmsFlightDate;
	
	/** 
	 * 航班id
	 **/
	private $mmsFlightId;
	
	/** 
	 * 航班号
	 **/
	private $mmsFlightNum;
	
	/** 
	 * 航班当前状态
	 **/
	private $mmsFlightStatus;
	
	/** 
	 * 消息类型
	 **/
	private $mmsMark;
	
	/** 
	 * 航班最近一个月准点率
	 **/
	private $mmsOntimeRate;
	
	/** 
	 * 前序航班状态
	 **/
	private $mmsPreFlightStatus;
	
	/** 
	 * 备注原因
	 **/
	private $mmsReason;
	
	/** 
	 * 发送时间
	 **/
	private $mmsSendTime;
	
	/** 
	 * 经停城市
	 **/
	private $mmsStopCity;
	
	/** 
	 * 经停地航站楼
	 **/
	private $mmsStopTerminal;
	
	/** 
	 * 去飞机场提前时间
	 **/
	private $mmsToAirportTime;
	
	/** 
	 * 用户id
	 **/
	private $mmsUserId;
	
	private $apiParas = array();
	
	public function setMmsAirAge($mmsAirAge)
	{
		$this->mmsAirAge = $mmsAirAge;
		$this->apiParas["mms_air_age"] = $mmsAirAge;
	}

	public function getMmsAirAge()
	{
		return $this->mmsAirAge;
	}

	public function setMmsAirModel($mmsAirModel)
	{
		$this->mmsAirModel = $mmsAirModel;
		$this->apiParas["mms_air_model"] = $mmsAirModel;
	}

	public function getMmsAirModel()
	{
		return $this->mmsAirModel;
	}

	public function setMmsAltCity($mmsAltCity)
	{
		$this->mmsAltCity = $mmsAltCity;
		$this->apiParas["mms_alt_city"] = $mmsAltCity;
	}

	public function getMmsAltCity()
	{
		return $this->mmsAltCity;
	}

	public function setMmsArrAirport($mmsArrAirport)
	{
		$this->mmsArrAirport = $mmsArrAirport;
		$this->apiParas["mms_arr_airport"] = $mmsArrAirport;
	}

	public function getMmsArrAirport()
	{
		return $this->mmsArrAirport;
	}

	public function setMmsArrAirportCheckIn($mmsArrAirportCheckIn)
	{
		$this->mmsArrAirportCheckIn = $mmsArrAirportCheckIn;
		$this->apiParas["mms_arr_airport_check_in"] = $mmsArrAirportCheckIn;
	}

	public function getMmsArrAirportCheckIn()
	{
		return $this->mmsArrAirportCheckIn;
	}

	public function setMmsArrCity($mmsArrCity)
	{
		$this->mmsArrCity = $mmsArrCity;
		$this->apiParas["mms_arr_city"] = $mmsArrCity;
	}

	public function getMmsArrCity()
	{
		return $this->mmsArrCity;
	}

	public function setMmsArrCityWeather($mmsArrCityWeather)
	{
		$this->mmsArrCityWeather = $mmsArrCityWeather;
		$this->apiParas["mms_arr_city_weather"] = $mmsArrCityWeather;
	}

	public function getMmsArrCityWeather()
	{
		return $this->mmsArrCityWeather;
	}

	public function setMmsArrPortTraffic($mmsArrPortTraffic)
	{
		$this->mmsArrPortTraffic = $mmsArrPortTraffic;
		$this->apiParas["mms_arr_port_traffic"] = $mmsArrPortTraffic;
	}

	public function getMmsArrPortTraffic()
	{
		return $this->mmsArrPortTraffic;
	}

	public function setMmsArrPortWeather($mmsArrPortWeather)
	{
		$this->mmsArrPortWeather = $mmsArrPortWeather;
		$this->apiParas["mms_arr_port_weather"] = $mmsArrPortWeather;
	}

	public function getMmsArrPortWeather()
	{
		return $this->mmsArrPortWeather;
	}

	public function setMmsArrTelephone($mmsArrTelephone)
	{
		$this->mmsArrTelephone = $mmsArrTelephone;
		$this->apiParas["mms_arr_telephone"] = $mmsArrTelephone;
	}

	public function getMmsArrTelephone()
	{
		return $this->mmsArrTelephone;
	}

	public function setMmsArrTerminal($mmsArrTerminal)
	{
		$this->mmsArrTerminal = $mmsArrTerminal;
		$this->apiParas["mms_arr_terminal"] = $mmsArrTerminal;
	}

	public function getMmsArrTerminal()
	{
		return $this->mmsArrTerminal;
	}

	public function setMmsArriveActual($mmsArriveActual)
	{
		$this->mmsArriveActual = $mmsArriveActual;
		$this->apiParas["mms_arrive_actual"] = $mmsArriveActual;
	}

	public function getMmsArriveActual()
	{
		return $this->mmsArriveActual;
	}

	public function setMmsArriveEstimated($mmsArriveEstimated)
	{
		$this->mmsArriveEstimated = $mmsArriveEstimated;
		$this->apiParas["mms_arrive_estimated"] = $mmsArriveEstimated;
	}

	public function getMmsArriveEstimated()
	{
		return $this->mmsArriveEstimated;
	}

	public function setMmsArriveScheduled($mmsArriveScheduled)
	{
		$this->mmsArriveScheduled = $mmsArriveScheduled;
		$this->apiParas["mms_arrive_scheduled"] = $mmsArriveScheduled;
	}

	public function getMmsArriveScheduled()
	{
		return $this->mmsArriveScheduled;
	}

	public function setMmsArriveStopActual($mmsArriveStopActual)
	{
		$this->mmsArriveStopActual = $mmsArriveStopActual;
		$this->apiParas["mms_arrive_stop_actual"] = $mmsArriveStopActual;
	}

	public function getMmsArriveStopActual()
	{
		return $this->mmsArriveStopActual;
	}

	public function setMmsDelayPossibility($mmsDelayPossibility)
	{
		$this->mmsDelayPossibility = $mmsDelayPossibility;
		$this->apiParas["mms_delay_possibility"] = $mmsDelayPossibility;
	}

	public function getMmsDelayPossibility()
	{
		return $this->mmsDelayPossibility;
	}

	public function setMmsDepAirport($mmsDepAirport)
	{
		$this->mmsDepAirport = $mmsDepAirport;
		$this->apiParas["mms_dep_airport"] = $mmsDepAirport;
	}

	public function getMmsDepAirport()
	{
		return $this->mmsDepAirport;
	}

	public function setMmsDepAirportGate($mmsDepAirportGate)
	{
		$this->mmsDepAirportGate = $mmsDepAirportGate;
		$this->apiParas["mms_dep_airport_gate"] = $mmsDepAirportGate;
	}

	public function getMmsDepAirportGate()
	{
		return $this->mmsDepAirportGate;
	}

	public function setMmsDepCity($mmsDepCity)
	{
		$this->mmsDepCity = $mmsDepCity;
		$this->apiParas["mms_dep_city"] = $mmsDepCity;
	}

	public function getMmsDepCity()
	{
		return $this->mmsDepCity;
	}

	public function setMmsDepCityWeather($mmsDepCityWeather)
	{
		$this->mmsDepCityWeather = $mmsDepCityWeather;
		$this->apiParas["mms_dep_city_weather"] = $mmsDepCityWeather;
	}

	public function getMmsDepCityWeather()
	{
		return $this->mmsDepCityWeather;
	}

	public function setMmsDepPortTraffic($mmsDepPortTraffic)
	{
		$this->mmsDepPortTraffic = $mmsDepPortTraffic;
		$this->apiParas["mms_dep_port_traffic"] = $mmsDepPortTraffic;
	}

	public function getMmsDepPortTraffic()
	{
		return $this->mmsDepPortTraffic;
	}

	public function setMmsDepPortWeather($mmsDepPortWeather)
	{
		$this->mmsDepPortWeather = $mmsDepPortWeather;
		$this->apiParas["mms_dep_port_weather"] = $mmsDepPortWeather;
	}

	public function getMmsDepPortWeather()
	{
		return $this->mmsDepPortWeather;
	}

	public function setMmsDepTelephone($mmsDepTelephone)
	{
		$this->mmsDepTelephone = $mmsDepTelephone;
		$this->apiParas["mms_dep_telephone"] = $mmsDepTelephone;
	}

	public function getMmsDepTelephone()
	{
		return $this->mmsDepTelephone;
	}

	public function setMmsDepTerminal($mmsDepTerminal)
	{
		$this->mmsDepTerminal = $mmsDepTerminal;
		$this->apiParas["mms_dep_terminal"] = $mmsDepTerminal;
	}

	public function getMmsDepTerminal()
	{
		return $this->mmsDepTerminal;
	}

	public function setMmsDepartActual($mmsDepartActual)
	{
		$this->mmsDepartActual = $mmsDepartActual;
		$this->apiParas["mms_depart_actual"] = $mmsDepartActual;
	}

	public function getMmsDepartActual()
	{
		return $this->mmsDepartActual;
	}

	public function setMmsDepartEstimated($mmsDepartEstimated)
	{
		$this->mmsDepartEstimated = $mmsDepartEstimated;
		$this->apiParas["mms_depart_estimated"] = $mmsDepartEstimated;
	}

	public function getMmsDepartEstimated()
	{
		return $this->mmsDepartEstimated;
	}

	public function setMmsDepartScheduled($mmsDepartScheduled)
	{
		$this->mmsDepartScheduled = $mmsDepartScheduled;
		$this->apiParas["mms_depart_scheduled"] = $mmsDepartScheduled;
	}

	public function getMmsDepartScheduled()
	{
		return $this->mmsDepartScheduled;
	}

	public function setMmsDepartStopActual($mmsDepartStopActual)
	{
		$this->mmsDepartStopActual = $mmsDepartStopActual;
		$this->apiParas["mms_depart_stop_actual"] = $mmsDepartStopActual;
	}

	public function getMmsDepartStopActual()
	{
		return $this->mmsDepartStopActual;
	}

	public function setMmsFlightDate($mmsFlightDate)
	{
		$this->mmsFlightDate = $mmsFlightDate;
		$this->apiParas["mms_flight_date"] = $mmsFlightDate;
	}

	public function getMmsFlightDate()
	{
		return $this->mmsFlightDate;
	}

	public function setMmsFlightId($mmsFlightId)
	{
		$this->mmsFlightId = $mmsFlightId;
		$this->apiParas["mms_flight_id"] = $mmsFlightId;
	}

	public function getMmsFlightId()
	{
		return $this->mmsFlightId;
	}

	public function setMmsFlightNum($mmsFlightNum)
	{
		$this->mmsFlightNum = $mmsFlightNum;
		$this->apiParas["mms_flight_num"] = $mmsFlightNum;
	}

	public function getMmsFlightNum()
	{
		return $this->mmsFlightNum;
	}

	public function setMmsFlightStatus($mmsFlightStatus)
	{
		$this->mmsFlightStatus = $mmsFlightStatus;
		$this->apiParas["mms_flight_status"] = $mmsFlightStatus;
	}

	public function getMmsFlightStatus()
	{
		return $this->mmsFlightStatus;
	}

	public function setMmsMark($mmsMark)
	{
		$this->mmsMark = $mmsMark;
		$this->apiParas["mms_mark"] = $mmsMark;
	}

	public function getMmsMark()
	{
		return $this->mmsMark;
	}

	public function setMmsOntimeRate($mmsOntimeRate)
	{
		$this->mmsOntimeRate = $mmsOntimeRate;
		$this->apiParas["mms_ontime_rate"] = $mmsOntimeRate;
	}

	public function getMmsOntimeRate()
	{
		return $this->mmsOntimeRate;
	}

	public function setMmsPreFlightStatus($mmsPreFlightStatus)
	{
		$this->mmsPreFlightStatus = $mmsPreFlightStatus;
		$this->apiParas["mms_pre_flight_status"] = $mmsPreFlightStatus;
	}

	public function getMmsPreFlightStatus()
	{
		return $this->mmsPreFlightStatus;
	}

	public function setMmsReason($mmsReason)
	{
		$this->mmsReason = $mmsReason;
		$this->apiParas["mms_reason"] = $mmsReason;
	}

	public function getMmsReason()
	{
		return $this->mmsReason;
	}

	public function setMmsSendTime($mmsSendTime)
	{
		$this->mmsSendTime = $mmsSendTime;
		$this->apiParas["mms_send_time"] = $mmsSendTime;
	}

	public function getMmsSendTime()
	{
		return $this->mmsSendTime;
	}

	public function setMmsStopCity($mmsStopCity)
	{
		$this->mmsStopCity = $mmsStopCity;
		$this->apiParas["mms_stop_city"] = $mmsStopCity;
	}

	public function getMmsStopCity()
	{
		return $this->mmsStopCity;
	}

	public function setMmsStopTerminal($mmsStopTerminal)
	{
		$this->mmsStopTerminal = $mmsStopTerminal;
		$this->apiParas["mms_stop_terminal"] = $mmsStopTerminal;
	}

	public function getMmsStopTerminal()
	{
		return $this->mmsStopTerminal;
	}

	public function setMmsToAirportTime($mmsToAirportTime)
	{
		$this->mmsToAirportTime = $mmsToAirportTime;
		$this->apiParas["mms_to_airport_time"] = $mmsToAirportTime;
	}

	public function getMmsToAirportTime()
	{
		return $this->mmsToAirportTime;
	}

	public function setMmsUserId($mmsUserId)
	{
		$this->mmsUserId = $mmsUserId;
		$this->apiParas["mms_user_id"] = $mmsUserId;
	}

	public function getMmsUserId()
	{
		return $this->mmsUserId;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.feiyoumessage.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mmsArrCity,"mmsArrCity");
		RequestCheckUtil::checkMaxLength($this->mmsArrCity,64,"mmsArrCity");
		RequestCheckUtil::checkMaxLength($this->mmsArriveActual,5,"mmsArriveActual");
		RequestCheckUtil::checkMaxLength($this->mmsArriveEstimated,5,"mmsArriveEstimated");
		RequestCheckUtil::checkMaxLength($this->mmsArriveScheduled,5,"mmsArriveScheduled");
		RequestCheckUtil::checkMaxLength($this->mmsArriveStopActual,5,"mmsArriveStopActual");
		RequestCheckUtil::checkNotNull($this->mmsDepCity,"mmsDepCity");
		RequestCheckUtil::checkMaxLength($this->mmsDepCity,64,"mmsDepCity");
		RequestCheckUtil::checkMaxLength($this->mmsDepartActual,5,"mmsDepartActual");
		RequestCheckUtil::checkMaxLength($this->mmsDepartEstimated,5,"mmsDepartEstimated");
		RequestCheckUtil::checkMaxLength($this->mmsDepartScheduled,5,"mmsDepartScheduled");
		RequestCheckUtil::checkMaxLength($this->mmsDepartStopActual,5,"mmsDepartStopActual");
		RequestCheckUtil::checkNotNull($this->mmsFlightDate,"mmsFlightDate");
		RequestCheckUtil::checkMaxLength($this->mmsFlightDate,10,"mmsFlightDate");
		RequestCheckUtil::checkNotNull($this->mmsFlightId,"mmsFlightId");
		RequestCheckUtil::checkMaxLength($this->mmsFlightId,21,"mmsFlightId");
		RequestCheckUtil::checkNotNull($this->mmsFlightNum,"mmsFlightNum");
		RequestCheckUtil::checkMaxLength($this->mmsFlightNum,8,"mmsFlightNum");
		RequestCheckUtil::checkNotNull($this->mmsMark,"mmsMark");
		RequestCheckUtil::checkMaxLength($this->mmsMark,2,"mmsMark");
		RequestCheckUtil::checkNotNull($this->mmsSendTime,"mmsSendTime");
		RequestCheckUtil::checkMaxLength($this->mmsSendTime,16,"mmsSendTime");
		RequestCheckUtil::checkMaxLength($this->mmsToAirportTime,5,"mmsToAirportTime");
		RequestCheckUtil::checkNotNull($this->mmsUserId,"mmsUserId");
		RequestCheckUtil::checkMaxLength($this->mmsUserId,15,"mmsUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
