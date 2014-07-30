<?php
/**
 * TOP API: taobao.fuwu.rights.get request
 * 
 * @author auto create
 * @since 1.0, 2013-03-05 00:00:00
 */
class FuwuRightsGetRequest
{
	/** 
	 * 售后维权caseId，16位长度
	 **/
	private $caseId;
	
	private $apiParas = array();
	
	public function setCaseId($caseId)
	{
		$this->caseId = $caseId;
		$this->apiParas["case_id"] = $caseId;
	}

	public function getCaseId()
	{
		return $this->caseId;
	}

	public function getApiMethodName()
	{
		return "taobao.fuwu.rights.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->caseId,"caseId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
