<?php
/**
 * TOP API: taobao.wweservice.dsr.responserates.get request
 * 
 * @author auto create
 * @since 1.0, 2012-08-30 00:00:00
 */
class WweserviceDsrResponseratesGetRequest
{
	/** 
	 * 日期
	 **/
	private $date;
	
	/** 
	 * 子客服昵称
	 **/
	private $subAccountList;
	
	/** 
	 * 主帐号昵称
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setDate($date)
	{
		$this->date = $date;
		$this->apiParas["date"] = $date;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setSubAccountList($subAccountList)
	{
		$this->subAccountList = $subAccountList;
		$this->apiParas["sub_account_list"] = $subAccountList;
	}

	public function getSubAccountList()
	{
		return $this->subAccountList;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.wweservice.dsr.responserates.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->date,"date");
		RequestCheckUtil::checkNotNull($this->subAccountList,"subAccountList");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
