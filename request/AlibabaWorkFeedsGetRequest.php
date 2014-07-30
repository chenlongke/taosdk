<?php
/**
 * TOP API: alibaba.work.feeds.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-18 00:00:00
 */
class AlibabaWorkFeedsGetRequest
{
	/** 
	 * 111
	 **/
	private $aaa;
	
	/** 
	 * 111
	 **/
	private $atest;
	
	private $apiParas = array();
	
	public function setAaa($aaa)
	{
		$this->aaa = $aaa;
		$this->apiParas["aaa"] = $aaa;
	}

	public function getAaa()
	{
		return $this->aaa;
	}

	public function setAtest($atest)
	{
		$this->atest = $atest;
		$this->apiParas["atest"] = $atest;
	}

	public function getAtest()
	{
		return $this->atest;
	}

	public function getApiMethodName()
	{
		return "alibaba.work.feeds.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->aaa,"aaa");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
