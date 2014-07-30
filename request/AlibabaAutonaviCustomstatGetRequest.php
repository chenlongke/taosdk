<?php
/**
 * TOP API: alibaba.autonavi.customstat.get request
 * 
 * @author auto create
 * @since 1.0, 2014-01-06 00:00:00
 */
class AlibabaAutonaviCustomstatGetRequest
{
	/** 
	 * 业务日期，以长度为8位的整数来表示，如月份、日期为1位数，则前面补零。若将来精确到时分秒，本接口最大支持到14位。
	 **/
	private $bizdate;
	
	/** 
	 * 地理区块ID，地理区块的精确度在线下另行约定。
	 **/
	private $gid;
	
	/** 
	 * 统计类型
	 **/
	private $statType;
	
	private $apiParas = array();
	
	public function setBizdate($bizdate)
	{
		$this->bizdate = $bizdate;
		$this->apiParas["bizdate"] = $bizdate;
	}

	public function getBizdate()
	{
		return $this->bizdate;
	}

	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function setStatType($statType)
	{
		$this->statType = $statType;
		$this->apiParas["stat_type"] = $statType;
	}

	public function getStatType()
	{
		return $this->statType;
	}

	public function getApiMethodName()
	{
		return "alibaba.autonavi.customstat.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->bizdate,14,"bizdate");
		RequestCheckUtil::checkNotNull($this->gid,"gid");
		RequestCheckUtil::checkMaxLength($this->gid,409600,"gid");
		RequestCheckUtil::checkNotNull($this->statType,"statType");
		RequestCheckUtil::checkMaxLength($this->statType,409600,"statType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
