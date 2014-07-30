<?php
/**
 * TOP API: taobao.tpn.authorize.permit request
 * 
 * @author auto create
 * @since 1.0, 2014-04-16 00:00:00
 */
class TpnAuthorizePermitRequest
{
	/** 
	 * 客户端的版本信息
	 **/
	private $clientInfo;
	
	/** 
	 * json结构，用于告诉服务端那些消息是需要开通的
	 **/
	private $openSubInfo;
	
	/** 
	 * 订阅的消息状态
	 **/
	private $status;
	
	/** 
	 * 是否需要听到用户的授权
	 **/
	private $stop;
	
	/** 
	 * 告诉服务端那些消息类型是关闭的
	 **/
	private $stopSubInfo;
	
	/** 
	 * 子账号userid
	 **/
	private $subUserid;
	
	/** 
	 * 订阅的消息类目
	 **/
	private $topics;
	
	private $apiParas = array();
	
	public function setClientInfo($clientInfo)
	{
		$this->clientInfo = $clientInfo;
		$this->apiParas["client_info"] = $clientInfo;
	}

	public function getClientInfo()
	{
		return $this->clientInfo;
	}

	public function setOpenSubInfo($openSubInfo)
	{
		$this->openSubInfo = $openSubInfo;
		$this->apiParas["open_sub_info"] = $openSubInfo;
	}

	public function getOpenSubInfo()
	{
		return $this->openSubInfo;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStop($stop)
	{
		$this->stop = $stop;
		$this->apiParas["stop"] = $stop;
	}

	public function getStop()
	{
		return $this->stop;
	}

	public function setStopSubInfo($stopSubInfo)
	{
		$this->stopSubInfo = $stopSubInfo;
		$this->apiParas["stop_sub_info"] = $stopSubInfo;
	}

	public function getStopSubInfo()
	{
		return $this->stopSubInfo;
	}

	public function setSubUserid($subUserid)
	{
		$this->subUserid = $subUserid;
		$this->apiParas["sub_userid"] = $subUserid;
	}

	public function getSubUserid()
	{
		return $this->subUserid;
	}

	public function setTopics($topics)
	{
		$this->topics = $topics;
		$this->apiParas["topics"] = $topics;
	}

	public function getTopics()
	{
		return $this->topics;
	}

	public function getApiMethodName()
	{
		return "taobao.tpn.authorize.permit";
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
