<?php
/**
 * TOP API: taobao.bbs.threadanduser.pull request
 * 
 * @author auto create
 * @since 1.0, 2012-03-20 00:00:00
 */
class BbsThreadanduserPullRequest
{
	/** 
	 * 版块id
	 **/
	private $boardId;
	
	/** 
	 * 回复id
	 **/
	private $replyId;
	
	/** 
	 * 帖子id
	 **/
	private $threadId;
	
	private $apiParas = array();
	
	public function setBoardId($boardId)
	{
		$this->boardId = $boardId;
		$this->apiParas["board_id"] = $boardId;
	}

	public function getBoardId()
	{
		return $this->boardId;
	}

	public function setReplyId($replyId)
	{
		$this->replyId = $replyId;
		$this->apiParas["reply_id"] = $replyId;
	}

	public function getReplyId()
	{
		return $this->replyId;
	}

	public function setThreadId($threadId)
	{
		$this->threadId = $threadId;
		$this->apiParas["thread_id"] = $threadId;
	}

	public function getThreadId()
	{
		return $this->threadId;
	}

	public function getApiMethodName()
	{
		return "taobao.bbs.threadanduser.pull";
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
