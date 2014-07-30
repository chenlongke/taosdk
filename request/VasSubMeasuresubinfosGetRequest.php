<?php
/**
 * TOP API: taobao.vas.sub.measuresubinfos.get request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class VasSubMeasuresubinfosGetRequest
{
	/** 
	 * 服务对应的CODE
	 **/
	private $servCode;
	
	/** 
	 * 用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setServCode($servCode)
	{
		$this->servCode = $servCode;
		$this->apiParas["serv_code"] = $servCode;
	}

	public function getServCode()
	{
		return $this->servCode;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.sub.measuresubinfos.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->servCode,"servCode");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
