<?php
/**
 * TOP API: taobao.jianghu.user.getProfile request
 * 
 * @author auto create
 * @since 1.0, 2012-11-26 00:00:00
 */
class JianghuUserGetProfileRequest
{
	/** 
	 * 如果query_uid不为空，查询query_uid的用户信息，如果query_uid为空，则查询当前登录用户信息(须数字)
	 **/
	private $queryUid;
	
	private $apiParas = array();
	
	public function setQueryUid($queryUid)
	{
		$this->queryUid = $queryUid;
		$this->apiParas["query_uid"] = $queryUid;
	}

	public function getQueryUid()
	{
		return $this->queryUid;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.user.getProfile";
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
