<?php
/**
 * TOP API: taobao.kelude.user.syn.buc request
 * 
 * @author auto create
 * @since 1.0, 2014-04-16 00:00:00
 */
class KeludeUserSynBucRequest
{
	/** 
	 * buc user的序列化json
	 **/
	private $strBucUser;
	
	private $apiParas = array();
	
	public function setStrBucUser($strBucUser)
	{
		$this->strBucUser = $strBucUser;
		$this->apiParas["str_buc_user"] = $strBucUser;
	}

	public function getStrBucUser()
	{
		return $this->strBucUser;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.user.syn.buc";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->strBucUser,"strBucUser");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
