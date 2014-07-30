<?php
/**
 * TOP API: taobao.logistics.station.sendorder.add request
 * 
 * @author auto create
 * @since 1.0, 2012-11-13 00:00:00
 */
class LogisticsStationSendorderAddRequest
{
	/** 
	 * 物流公司名称
	 **/
	private $companyName;
	
	/** 
	 * 目的城市
	 **/
	private $dest;
	
	/** 
	 * 费用
	 **/
	private $fee;
	
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	/** 
	 * 收件人地址
	 **/
	private $recAddress;
	
	/** 
	 * 收件人名称
	 **/
	private $recName;
	
	/** 
	 * 收件人联系方式
	 **/
	private $recPhone;
	
	/** 
	 * 备注信息
	 **/
	private $remark;
	
	/** 
	 * 发件人姓名
	 **/
	private $sendName;
	
	/** 
	 * 发件人联系方式
	 **/
	private $sendPhone;
	
	/** 
	 * staSendOrderId
	 **/
	private $staSendorderId;
	
	/** 
	 * 服务站的ID
	 **/
	private $stationId;
	
	/** 
	 * 状态
	 **/
	private $status;
	
	/** 
	 * 保价字段
	 **/
	private $supportValue;
	
	/** 
	 * 用户ID
	 **/
	private $userId;
	
	/** 
	 * 重量
	 **/
	private $weight;
	
	private $apiParas = array();
	
	public function setCompanyName($companyName)
	{
		$this->companyName = $companyName;
		$this->apiParas["company_name"] = $companyName;
	}

	public function getCompanyName()
	{
		return $this->companyName;
	}

	public function setDest($dest)
	{
		$this->dest = $dest;
		$this->apiParas["dest"] = $dest;
	}

	public function getDest()
	{
		return $this->dest;
	}

	public function setFee($fee)
	{
		$this->fee = $fee;
		$this->apiParas["fee"] = $fee;
	}

	public function getFee()
	{
		return $this->fee;
	}

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setRecAddress($recAddress)
	{
		$this->recAddress = $recAddress;
		$this->apiParas["rec_address"] = $recAddress;
	}

	public function getRecAddress()
	{
		return $this->recAddress;
	}

	public function setRecName($recName)
	{
		$this->recName = $recName;
		$this->apiParas["rec_name"] = $recName;
	}

	public function getRecName()
	{
		return $this->recName;
	}

	public function setRecPhone($recPhone)
	{
		$this->recPhone = $recPhone;
		$this->apiParas["rec_phone"] = $recPhone;
	}

	public function getRecPhone()
	{
		return $this->recPhone;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setSendName($sendName)
	{
		$this->sendName = $sendName;
		$this->apiParas["send_name"] = $sendName;
	}

	public function getSendName()
	{
		return $this->sendName;
	}

	public function setSendPhone($sendPhone)
	{
		$this->sendPhone = $sendPhone;
		$this->apiParas["send_phone"] = $sendPhone;
	}

	public function getSendPhone()
	{
		return $this->sendPhone;
	}

	public function setStaSendorderId($staSendorderId)
	{
		$this->staSendorderId = $staSendorderId;
		$this->apiParas["sta_sendorder_id"] = $staSendorderId;
	}

	public function getStaSendorderId()
	{
		return $this->staSendorderId;
	}

	public function setStationId($stationId)
	{
		$this->stationId = $stationId;
		$this->apiParas["station_id"] = $stationId;
	}

	public function getStationId()
	{
		return $this->stationId;
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

	public function setSupportValue($supportValue)
	{
		$this->supportValue = $supportValue;
		$this->apiParas["support_value"] = $supportValue;
	}

	public function getSupportValue()
	{
		return $this->supportValue;
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

	public function setWeight($weight)
	{
		$this->weight = $weight;
		$this->apiParas["weight"] = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.station.sendorder.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->stationId,"stationId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
