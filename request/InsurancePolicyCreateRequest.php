<?php
/**
 * TOP API: taobao.insurance.policy.create request
 * 
 * @author auto create
 * @since 1.0, 2013-11-19 00:00:00
 */
class InsurancePolicyCreateRequest
{
	/** 
	 * 投保人账号ID，与投保人账号类型关联
	 **/
	private $holderId;
	
	/** 
	 * 投保人账号类型
	 **/
	private $holderType;
	
	/** 
	 * 保费，单位：分。
	 **/
	private $insuranceAmount;
	
	/** 
	 * 险种对应的业务数据，通过json格式传递，
接入前务必仔细阅读接口文档
	 **/
	private $insuranceData;
	
	/** 
	 * 险种ID，标识险种类型。
	 **/
	private $insuranceId;
	
	/** 
	 * 关联业务来源，如alipay_trade
	 **/
	private $relatedBizFrom;
	
	/** 
	 * 关联业务ID，与关联业务来源配合
	 **/
	private $relatedBizId;
	
	/** 
	 * 出单场景，如赠险
	 **/
	private $relatedBizScene;
	
	private $apiParas = array();
	
	public function setHolderId($holderId)
	{
		$this->holderId = $holderId;
		$this->apiParas["holder_id"] = $holderId;
	}

	public function getHolderId()
	{
		return $this->holderId;
	}

	public function setHolderType($holderType)
	{
		$this->holderType = $holderType;
		$this->apiParas["holder_type"] = $holderType;
	}

	public function getHolderType()
	{
		return $this->holderType;
	}

	public function setInsuranceAmount($insuranceAmount)
	{
		$this->insuranceAmount = $insuranceAmount;
		$this->apiParas["insurance_amount"] = $insuranceAmount;
	}

	public function getInsuranceAmount()
	{
		return $this->insuranceAmount;
	}

	public function setInsuranceData($insuranceData)
	{
		$this->insuranceData = $insuranceData;
		$this->apiParas["insurance_data"] = $insuranceData;
	}

	public function getInsuranceData()
	{
		return $this->insuranceData;
	}

	public function setInsuranceId($insuranceId)
	{
		$this->insuranceId = $insuranceId;
		$this->apiParas["insurance_id"] = $insuranceId;
	}

	public function getInsuranceId()
	{
		return $this->insuranceId;
	}

	public function setRelatedBizFrom($relatedBizFrom)
	{
		$this->relatedBizFrom = $relatedBizFrom;
		$this->apiParas["related_biz_from"] = $relatedBizFrom;
	}

	public function getRelatedBizFrom()
	{
		return $this->relatedBizFrom;
	}

	public function setRelatedBizId($relatedBizId)
	{
		$this->relatedBizId = $relatedBizId;
		$this->apiParas["related_biz_id"] = $relatedBizId;
	}

	public function getRelatedBizId()
	{
		return $this->relatedBizId;
	}

	public function setRelatedBizScene($relatedBizScene)
	{
		$this->relatedBizScene = $relatedBizScene;
		$this->apiParas["related_biz_scene"] = $relatedBizScene;
	}

	public function getRelatedBizScene()
	{
		return $this->relatedBizScene;
	}

	public function getApiMethodName()
	{
		return "taobao.insurance.policy.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->holderId,"holderId");
		RequestCheckUtil::checkMaxLength($this->holderId,30,"holderId");
		RequestCheckUtil::checkNotNull($this->holderType,"holderType");
		RequestCheckUtil::checkMaxLength($this->holderType,30,"holderType");
		RequestCheckUtil::checkMaxLength($this->insuranceAmount,10,"insuranceAmount");
		RequestCheckUtil::checkNotNull($this->insuranceData,"insuranceData");
		RequestCheckUtil::checkMaxLength($this->insuranceData,512,"insuranceData");
		RequestCheckUtil::checkNotNull($this->insuranceId,"insuranceId");
		RequestCheckUtil::checkMaxLength($this->insuranceId,10,"insuranceId");
		RequestCheckUtil::checkMaxLength($this->relatedBizId,100,"relatedBizId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
