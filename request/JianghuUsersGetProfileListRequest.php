<?php
/**
 * TOP API: taobao.jianghu.users.getProfileList request
 * 
 * @author auto create
 * @since 1.0, 2012-11-26 00:00:00
 */
class JianghuUsersGetProfileListRequest
{
	/** 
	 * 多个用户数字id 多个用”,”分隔，单次查询，最多可以查询50个用户的信息
	 **/
	private $uids;
	
	private $apiParas = array();
	
	public function setUids($uids)
	{
		$this->uids = $uids;
		$this->apiParas["uids"] = $uids;
	}

	public function getUids()
	{
		return $this->uids;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.users.getProfileList";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->uids,"uids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
