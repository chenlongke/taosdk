<?php
/**
 * TOP API: taobao.jianghu.award.reconsume request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class JianghuAwardReconsumeRequest
{
	/** 
	 * 获奖记录，第二次领取是根据获奖记录来领取奖品。
	 **/
	private $recordId;
	
	private $apiParas = array();
	
	public function setRecordId($recordId)
	{
		$this->recordId = $recordId;
		$this->apiParas["record_id"] = $recordId;
	}

	public function getRecordId()
	{
		return $this->recordId;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.award.reconsume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->recordId,"recordId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
