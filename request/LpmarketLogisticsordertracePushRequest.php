<?php
/**
 * TOP API: taobao.lpmarket.logisticsordertrace.push request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class LpmarketLogisticsordertracePushRequest
{
	/** 
	 * 物流公司
	 **/
	private $companyName;
	
	/** 
	 * 网点名称
	 **/
	private $facilityName;
	
	/** 
	 * 快递单号
	 **/
	private $mailNo;
	
	/** 
	 * 描述当前节点的操作，操作是“揽收”、“派送”或“签收”。
	 **/
	private $nodeDescription;
	
	/** 
	 * 流转节点发生时间
	 **/
	private $occureTime;
	
	/** 
	 * 流转节点的详细地址及操作描述
	 **/
	private $operateDetail;
	
	/** 
	 * 快递业务员联系方式，手机号码或电话
	 **/
	private $operatorContact;
	
	/** 
	 * 快递业务员名称
	 **/
	private $operatorName;
	
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

	public function setFacilityName($facilityName)
	{
		$this->facilityName = $facilityName;
		$this->apiParas["facility_name"] = $facilityName;
	}

	public function getFacilityName()
	{
		return $this->facilityName;
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

	public function setNodeDescription($nodeDescription)
	{
		$this->nodeDescription = $nodeDescription;
		$this->apiParas["node_description"] = $nodeDescription;
	}

	public function getNodeDescription()
	{
		return $this->nodeDescription;
	}

	public function setOccureTime($occureTime)
	{
		$this->occureTime = $occureTime;
		$this->apiParas["occure_time"] = $occureTime;
	}

	public function getOccureTime()
	{
		return $this->occureTime;
	}

	public function setOperateDetail($operateDetail)
	{
		$this->operateDetail = $operateDetail;
		$this->apiParas["operate_detail"] = $operateDetail;
	}

	public function getOperateDetail()
	{
		return $this->operateDetail;
	}

	public function setOperatorContact($operatorContact)
	{
		$this->operatorContact = $operatorContact;
		$this->apiParas["operator_contact"] = $operatorContact;
	}

	public function getOperatorContact()
	{
		return $this->operatorContact;
	}

	public function setOperatorName($operatorName)
	{
		$this->operatorName = $operatorName;
		$this->apiParas["operator_name"] = $operatorName;
	}

	public function getOperatorName()
	{
		return $this->operatorName;
	}

	public function getApiMethodName()
	{
		return "taobao.lpmarket.logisticsordertrace.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyName,"companyName");
		RequestCheckUtil::checkNotNull($this->mailNo,"mailNo");
		RequestCheckUtil::checkNotNull($this->occureTime,"occureTime");
		RequestCheckUtil::checkNotNull($this->operateDetail,"operateDetail");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
