<?php
/**
 * TOP API: taobao.wireless.gamecenter.take.gcoupon request
 * 
 * @author auto create
 * @since 1.0, 2014-01-27 00:00:00
 */
class WirelessGamecenterTakeGcouponRequest
{
	/** 
	 * 手机设备信息
	 **/
	private $deviceId;
	
	/** 
	 * 手机设备信息
	 **/
	private $imei;
	
	/** 
	 * 手机设备信息
	 **/
	private $imsi;
	
	/** 
	 * 临时cookie信息
	 **/
	private $tokenSymbol;
	
	/** 
	 * 渠道信息
	 **/
	private $ttid;
	
	private $apiParas = array();
	
	public function setDeviceId($deviceId)
	{
		$this->deviceId = $deviceId;
		$this->apiParas["device_id"] = $deviceId;
	}

	public function getDeviceId()
	{
		return $this->deviceId;
	}

	public function setImei($imei)
	{
		$this->imei = $imei;
		$this->apiParas["imei"] = $imei;
	}

	public function getImei()
	{
		return $this->imei;
	}

	public function setImsi($imsi)
	{
		$this->imsi = $imsi;
		$this->apiParas["imsi"] = $imsi;
	}

	public function getImsi()
	{
		return $this->imsi;
	}

	public function setTokenSymbol($tokenSymbol)
	{
		$this->tokenSymbol = $tokenSymbol;
		$this->apiParas["token_symbol"] = $tokenSymbol;
	}

	public function getTokenSymbol()
	{
		return $this->tokenSymbol;
	}

	public function setTtid($ttid)
	{
		$this->ttid = $ttid;
		$this->apiParas["ttid"] = $ttid;
	}

	public function getTtid()
	{
		return $this->ttid;
	}

	public function getApiMethodName()
	{
		return "taobao.wireless.gamecenter.take.gcoupon";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deviceId,"deviceId");
		RequestCheckUtil::checkNotNull($this->imei,"imei");
		RequestCheckUtil::checkNotNull($this->imsi,"imsi");
		RequestCheckUtil::checkNotNull($this->tokenSymbol,"tokenSymbol");
		RequestCheckUtil::checkNotNull($this->ttid,"ttid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
