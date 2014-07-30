<?php
/**
 * TOP API: taobao.jst.vss.voice.save request
 * 
 * @author auto create
 * @since 1.0, 2013-09-05 00:00:00
 */
class JstVssVoiceSaveRequest
{
	/** 
	 * 计费时长（单位，秒）
	 **/
	private $billingTime;
	
	/** 
	 * 传云存储空间的 bucket 名称，不能为空
	 **/
	private $bucketName;
	
	/** 
	 * 呼叫类型,1 商家主叫客户 ，2 客户主叫
	 **/
	private $callType;
	
	/** 
	 * 通话时长（单位，秒）
	 **/
	private $durationTime;
	
	/** 
	 * 上传云存储空间的 object(文件) 名称，不能为空
	 **/
	private $fileName;
	
	/** 
	 * NORMAL_CLEARING 正常结束 
USER_BUSY 用户忙 
ORIGINATOR_CANCEL 发起人取消 
NO_ANSWER 无人接听
	 **/
	private $hangupReason;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 商家ID
	 **/
	private $sellerId;
	
	/** 
	 * 商家电话号码（本机号码）
	 **/
	private $sellerPhone;
	
	/** 
	 * 通话开始时间
	 **/
	private $startTime;
	
	/** 
	 * 买家电话号码(对方号码)
	 **/
	private $userPhone;
	
	private $apiParas = array();
	
	public function setBillingTime($billingTime)
	{
		$this->billingTime = $billingTime;
		$this->apiParas["billing_time"] = $billingTime;
	}

	public function getBillingTime()
	{
		return $this->billingTime;
	}

	public function setBucketName($bucketName)
	{
		$this->bucketName = $bucketName;
		$this->apiParas["bucket_name"] = $bucketName;
	}

	public function getBucketName()
	{
		return $this->bucketName;
	}

	public function setCallType($callType)
	{
		$this->callType = $callType;
		$this->apiParas["call_type"] = $callType;
	}

	public function getCallType()
	{
		return $this->callType;
	}

	public function setDurationTime($durationTime)
	{
		$this->durationTime = $durationTime;
		$this->apiParas["duration_time"] = $durationTime;
	}

	public function getDurationTime()
	{
		return $this->durationTime;
	}

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
	}

	public function setHangupReason($hangupReason)
	{
		$this->hangupReason = $hangupReason;
		$this->apiParas["hangup_reason"] = $hangupReason;
	}

	public function getHangupReason()
	{
		return $this->hangupReason;
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

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSellerPhone($sellerPhone)
	{
		$this->sellerPhone = $sellerPhone;
		$this->apiParas["seller_phone"] = $sellerPhone;
	}

	public function getSellerPhone()
	{
		return $this->sellerPhone;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setUserPhone($userPhone)
	{
		$this->userPhone = $userPhone;
		$this->apiParas["user_phone"] = $userPhone;
	}

	public function getUserPhone()
	{
		return $this->userPhone;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.vss.voice.save";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->billingTime,"billingTime");
		RequestCheckUtil::checkNotNull($this->bucketName,"bucketName");
		RequestCheckUtil::checkNotNull($this->callType,"callType");
		RequestCheckUtil::checkMaxValue($this->callType,2,"callType");
		RequestCheckUtil::checkMinValue($this->callType,1,"callType");
		RequestCheckUtil::checkNotNull($this->durationTime,"durationTime");
		RequestCheckUtil::checkNotNull($this->fileName,"fileName");
		RequestCheckUtil::checkNotNull($this->hangupReason,"hangupReason");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->sellerPhone,"sellerPhone");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->userPhone,"userPhone");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
