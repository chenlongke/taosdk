<?php
/**
 * TOP API: taobao.lifeplace.sotrereviews.get request
 * 
 * @author auto create
 * @since 1.0, 2013-07-04 00:00:00
 */
class LifeplaceSotrereviewsGetRequest
{
	/** 
	 * 1:查询有效点评,默认查询全部
	 **/
	private $status;
	
	/** 
	 * 本地商户id
	 **/
	private $storeid;
	
	private $apiParas = array();
	
	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStoreid($storeid)
	{
		$this->storeid = $storeid;
		$this->apiParas["storeid"] = $storeid;
	}

	public function getStoreid()
	{
		return $this->storeid;
	}

	public function getApiMethodName()
	{
		return "taobao.lifeplace.sotrereviews.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->storeid,"storeid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
