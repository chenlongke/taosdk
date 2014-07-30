<?php
/**
 * TOP API: taobao.user.teluser.search request
 * 
 * @author auto create
 * @since 1.0, 2013-09-09 00:00:00
 */
class UserTeluserSearchRequest
{
	/** 
	 * 传入的电话号码
	 **/
	private $telNum;
	
	private $apiParas = array();
	
	public function setTelNum($telNum)
	{
		$this->telNum = $telNum;
		$this->apiParas["tel_num"] = $telNum;
	}

	public function getTelNum()
	{
		return $this->telNum;
	}

	public function getApiMethodName()
	{
		return "taobao.user.teluser.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->telNum,"telNum");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
