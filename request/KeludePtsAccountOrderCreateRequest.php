<?php
/**
 * TOP API: taobao.kelude.pts.account.order.create request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class KeludePtsAccountOrderCreateRequest
{
	/** 
	 * 阿里云服务器ID
	 **/
	private $ecsId;
	
	/** 
	 * havana用户ID
	 **/
	private $havanaId;
	
	/** 
	 * 订购有效期结束时间
	 **/
	private $orderEndTime;
	
	/** 
	 * 订购有效期开始时间
	 **/
	private $orderStartTime;
	
	/** 
	 * 阿里关系型数据库ID
	 **/
	private $rdsId;
	
	private $apiParas = array();
	
	public function setEcsId($ecsId)
	{
		$this->ecsId = $ecsId;
		$this->apiParas["ecs_id"] = $ecsId;
	}

	public function getEcsId()
	{
		return $this->ecsId;
	}

	public function setHavanaId($havanaId)
	{
		$this->havanaId = $havanaId;
		$this->apiParas["havana_id"] = $havanaId;
	}

	public function getHavanaId()
	{
		return $this->havanaId;
	}

	public function setOrderEndTime($orderEndTime)
	{
		$this->orderEndTime = $orderEndTime;
		$this->apiParas["order_end_time"] = $orderEndTime;
	}

	public function getOrderEndTime()
	{
		return $this->orderEndTime;
	}

	public function setOrderStartTime($orderStartTime)
	{
		$this->orderStartTime = $orderStartTime;
		$this->apiParas["order_start_time"] = $orderStartTime;
	}

	public function getOrderStartTime()
	{
		return $this->orderStartTime;
	}

	public function setRdsId($rdsId)
	{
		$this->rdsId = $rdsId;
		$this->apiParas["rds_id"] = $rdsId;
	}

	public function getRdsId()
	{
		return $this->rdsId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.pts.account.order.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->ecsId,1,"ecsId");
		RequestCheckUtil::checkNotNull($this->havanaId,"havanaId");
		RequestCheckUtil::checkMinValue($this->havanaId,1,"havanaId");
		RequestCheckUtil::checkNotNull($this->orderEndTime,"orderEndTime");
		RequestCheckUtil::checkNotNull($this->orderStartTime,"orderStartTime");
		RequestCheckUtil::checkMinValue($this->rdsId,1,"rdsId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
