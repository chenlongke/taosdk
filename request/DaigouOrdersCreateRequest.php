<?php
/**
 * TOP API: taobao.daigou.orders.create request
 * 
 * @author auto create
 * @since 1.0, 2012-03-20 00:00:00
 */
class DaigouOrdersCreateRequest
{
	/** 
	 * 代购单的批次号,可以传多个,以逗号分隔.如:123546,2345667
	 **/
	private $batchNum;
	
	private $apiParas = array();
	
	public function setBatchNum($batchNum)
	{
		$this->batchNum = $batchNum;
		$this->apiParas["batch_num"] = $batchNum;
	}

	public function getBatchNum()
	{
		return $this->batchNum;
	}

	public function getApiMethodName()
	{
		return "taobao.daigou.orders.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
