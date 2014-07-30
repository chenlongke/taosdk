<?php
/**
 * TOP API: taobao.kefu.leaveword.process request
 * 
 * @author auto create
 * @since 1.0, 2011-09-08 00:00:00
 */
class KefuLeavewordProcessRequest
{
	/** 
	 * 联系人
	 **/
	private $contractPerson;
	
	/** 
	 * 回复会员的邮件内容
	 **/
	private $emailReply;
	
	/** 
	 * 实际处理社会化留言的志愿者昵称
	 **/
	private $realDealerNick;
	
	/** 
	 * 发送给会员的邮件主题
	 **/
	private $subject;
	
	/** 
	 * 留言任务标识
	 **/
	private $taskId;
	
	/** 
	 * 会员的Email邮箱
	 **/
	private $userEmail;
	
	private $apiParas = array();
	
	public function setContractPerson($contractPerson)
	{
		$this->contractPerson = $contractPerson;
		$this->apiParas["contract_person"] = $contractPerson;
	}

	public function getContractPerson()
	{
		return $this->contractPerson;
	}

	public function setEmailReply($emailReply)
	{
		$this->emailReply = $emailReply;
		$this->apiParas["email_reply"] = $emailReply;
	}

	public function getEmailReply()
	{
		return $this->emailReply;
	}

	public function setRealDealerNick($realDealerNick)
	{
		$this->realDealerNick = $realDealerNick;
		$this->apiParas["real_dealer_nick"] = $realDealerNick;
	}

	public function getRealDealerNick()
	{
		return $this->realDealerNick;
	}

	public function setSubject($subject)
	{
		$this->subject = $subject;
		$this->apiParas["subject"] = $subject;
	}

	public function getSubject()
	{
		return $this->subject;
	}

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function setUserEmail($userEmail)
	{
		$this->userEmail = $userEmail;
		$this->apiParas["user_email"] = $userEmail;
	}

	public function getUserEmail()
	{
		return $this->userEmail;
	}

	public function getApiMethodName()
	{
		return "taobao.kefu.leaveword.process";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->contractPerson,"contractPerson");
		RequestCheckUtil::checkNotNull($this->emailReply,"emailReply");
		RequestCheckUtil::checkNotNull($this->realDealerNick,"realDealerNick");
		RequestCheckUtil::checkNotNull($this->taskId,"taskId");
		RequestCheckUtil::checkNotNull($this->userEmail,"userEmail");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
