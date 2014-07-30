<?php
/**
 * TOP API: taobao.bbs.update.push request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class BbsUpdatePushRequest
{
	/** 
	 * 是否来源于淘宝
	 **/
	private $fromTb;
	
	/** 
	 * 操作原因
	 **/
	private $lastModifiedTime;
	
	/** 
	 * 对帖子操作的操作码
	 **/
	private $opCode;
	
	/** 
	 * 操作原因
	 **/
	private $opReason;
	
	/** 
	 * 淘宝主帖的回帖的ID
	 **/
	private $tbReplyId;
	
	/** 
	 * 淘宝主帖ID
	 **/
	private $tbThreadId;
	
	/** 
	 * 第三方版块ID
	 **/
	private $tpBoardId;
	
	/** 
	 * 第三方回帖ID
	 **/
	private $tpReplyId;
	
	/** 
	 * 第三方主帖ID
	 **/
	private $tpThreadId;
	
	private $apiParas = array();
	
	public function setFromTb($fromTb)
	{
		$this->fromTb = $fromTb;
		$this->apiParas["from_tb"] = $fromTb;
	}

	public function getFromTb()
	{
		return $this->fromTb;
	}

	public function setLastModifiedTime($lastModifiedTime)
	{
		$this->lastModifiedTime = $lastModifiedTime;
		$this->apiParas["last_modified_time"] = $lastModifiedTime;
	}

	public function getLastModifiedTime()
	{
		return $this->lastModifiedTime;
	}

	public function setOpCode($opCode)
	{
		$this->opCode = $opCode;
		$this->apiParas["op_code"] = $opCode;
	}

	public function getOpCode()
	{
		return $this->opCode;
	}

	public function setOpReason($opReason)
	{
		$this->opReason = $opReason;
		$this->apiParas["op_reason"] = $opReason;
	}

	public function getOpReason()
	{
		return $this->opReason;
	}

	public function setTbReplyId($tbReplyId)
	{
		$this->tbReplyId = $tbReplyId;
		$this->apiParas["tb_reply_id"] = $tbReplyId;
	}

	public function getTbReplyId()
	{
		return $this->tbReplyId;
	}

	public function setTbThreadId($tbThreadId)
	{
		$this->tbThreadId = $tbThreadId;
		$this->apiParas["tb_thread_id"] = $tbThreadId;
	}

	public function getTbThreadId()
	{
		return $this->tbThreadId;
	}

	public function setTpBoardId($tpBoardId)
	{
		$this->tpBoardId = $tpBoardId;
		$this->apiParas["tp_board_id"] = $tpBoardId;
	}

	public function getTpBoardId()
	{
		return $this->tpBoardId;
	}

	public function setTpReplyId($tpReplyId)
	{
		$this->tpReplyId = $tpReplyId;
		$this->apiParas["tp_reply_id"] = $tpReplyId;
	}

	public function getTpReplyId()
	{
		return $this->tpReplyId;
	}

	public function setTpThreadId($tpThreadId)
	{
		$this->tpThreadId = $tpThreadId;
		$this->apiParas["tp_thread_id"] = $tpThreadId;
	}

	public function getTpThreadId()
	{
		return $this->tpThreadId;
	}

	public function getApiMethodName()
	{
		return "taobao.bbs.update.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fromTb,"fromTb");
		RequestCheckUtil::checkNotNull($this->lastModifiedTime,"lastModifiedTime");
		RequestCheckUtil::checkNotNull($this->opCode,"opCode");
		RequestCheckUtil::checkNotNull($this->tpBoardId,"tpBoardId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
