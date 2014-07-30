<?php
/**
 * TOP API: taobao.sellercenter.subuser.info.modify request
 * 
 * @author auto create
 * @since 1.0, 2011-09-08 00:00:00
 */
class SellercenterSubuserInfoModifyRequest
{
	/** 
	 * 子账户姓名
	 **/
	private $fullName;
	
	/** 
	 * 是否参与分流 1不参与 2参与
	 **/
	private $isOnline;
	
	/** 
	 * 子账号昵称(子账号的唯一标识)
	 **/
	private $nick;
	
	/** 
	 * 子账号联系电话
	 **/
	private $phone;
	
	/** 
	 * 子账号的状态  状态 1正常  2冻结
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setFullName($fullName)
	{
		$this->fullName = $fullName;
		$this->apiParas["full_name"] = $fullName;
	}

	public function getFullName()
	{
		return $this->fullName;
	}

	public function setIsOnline($isOnline)
	{
		$this->isOnline = $isOnline;
		$this->apiParas["is_online"] = $isOnline;
	}

	public function getIsOnline()
	{
		return $this->isOnline;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
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

	public function getApiMethodName()
	{
		return "taobao.sellercenter.subuser.info.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->fullName,50,"fullName");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkMaxLength($this->phone,50,"phone");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
