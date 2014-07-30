<?php
/**
 * TOP API: taobao.tanx.creatives.get request
 * 
 * @author auto create
 * @since 1.0, 2013-10-24 00:00:00
 */
class TanxCreativesGetRequest
{
	/** 
	 * DSP的memberId
	 **/
	private $memberId;
	
	/** 
	 * 分页的页码(第一页为1)
	 **/
	private $page;
	
	/** 
	 * 当前时间戳，1970-01-01后的秒数
	 **/
	private $signTime;
	
	/** 
	 * 创意的状态（全部ALL,通过PASS,拒绝REFUSE,未审核WAITING）
	 **/
	private $status;
	
	/** 
	 * dsp用户身份认证的TOKEN
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setMemberId($memberId)
	{
		$this->memberId = $memberId;
		$this->apiParas["member_id"] = $memberId;
	}

	public function getMemberId()
	{
		return $this->memberId;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function setSignTime($signTime)
	{
		$this->signTime = $signTime;
		$this->apiParas["sign_time"] = $signTime;
	}

	public function getSignTime()
	{
		return $this->signTime;
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

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "taobao.tanx.creatives.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->memberId,"memberId");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->signTime,"signTime");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
