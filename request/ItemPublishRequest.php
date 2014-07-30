<?php
/**
 * TOP API: taobao.item.publish request
 * 
 * @author auto create
 * @since 1.0, 2013-09-22 00:00:00
 */
class ItemPublishRequest
{
	/** 
	 * 根据发布的schema定义，isv组装好的入参
	 **/
	private $param;
	
	/** 
	 * 发布商品的用户id
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "taobao.item.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->param,"param");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
