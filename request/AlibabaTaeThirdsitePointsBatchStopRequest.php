<?php
/**
 * TOP API: alibaba.tae.thirdsite.points.batch.stop request
 * 
 * @author auto create
 * @since 1.0, 2014-03-31 00:00:00
 */
class AlibabaTaeThirdsitePointsBatchStopRequest
{
	/** 
	 * 积分批次的id
	 **/
	private $batchId;
	
	private $apiParas = array();
	
	public function setBatchId($batchId)
	{
		$this->batchId = $batchId;
		$this->apiParas["batch_id"] = $batchId;
	}

	public function getBatchId()
	{
		return $this->batchId;
	}

	public function getApiMethodName()
	{
		return "alibaba.tae.thirdsite.points.batch.stop";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->batchId,"batchId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
