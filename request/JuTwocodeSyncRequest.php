<?php
/**
 * TOP API: taobao.ju.twocode.sync request
 * 
 * @author auto create
 * @since 1.0, 2012-10-18 00:00:00
 */
class JuTwocodeSyncRequest
{
	/** 
	 * 二维码厂商自行决定的64位加密串，聚划算在调用二维码厂商时，通过这个key生成签名
	 **/
	private $key;
	
	/** 
	 * 二维码过期时间
	 **/
	private $overdueTime;
	
	/** 
	 * 二维码状态：
0 发码且未消费完
1 已消费完
2 已注销
3 已过期
	 **/
	private $status;
	
	/** 
	 * 二维码总消费数量
	 **/
	private $sumcount;
	
	/** 
	 * 淘宝交易订单号
	 **/
	private $tbBizOrderId;
	
	/** 
	 * 二维码已消费数量
	 **/
	private $usedcount;
	
	/** 
	 * 买家id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setKey($key)
	{
		$this->key = $key;
		$this->apiParas["key"] = $key;
	}

	public function getKey()
	{
		return $this->key;
	}

	public function setOverdueTime($overdueTime)
	{
		$this->overdueTime = $overdueTime;
		$this->apiParas["overdue_time"] = $overdueTime;
	}

	public function getOverdueTime()
	{
		return $this->overdueTime;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setSumcount($sumcount)
	{
		$this->sumcount = $sumcount;
		$this->apiParas["sumcount"] = $sumcount;
	}

	public function getSumcount()
	{
		return $this->sumcount;
	}

	public function setTbBizOrderId($tbBizOrderId)
	{
		$this->tbBizOrderId = $tbBizOrderId;
		$this->apiParas["tb_biz_order_id"] = $tbBizOrderId;
	}

	public function getTbBizOrderId()
	{
		return $this->tbBizOrderId;
	}

	public function setUsedcount($usedcount)
	{
		$this->usedcount = $usedcount;
		$this->apiParas["usedcount"] = $usedcount;
	}

	public function getUsedcount()
	{
		return $this->usedcount;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.twocode.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->key,"key");
		RequestCheckUtil::checkNotNull($this->overdueTime,"overdueTime");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->sumcount,"sumcount");
		RequestCheckUtil::checkNotNull($this->tbBizOrderId,"tbBizOrderId");
		RequestCheckUtil::checkNotNull($this->usedcount,"usedcount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
