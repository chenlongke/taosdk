<?php
/**
 * TOP API: taobao.bbs.reply.idlist.pull request
 * 
 * @author auto create
 * @since 1.0, 2011-12-01 00:00:00
 */
class BbsReplyIdlistPullRequest
{
	/** 
	 * 淘宝版块id
	 **/
	private $boardId;
	
	/** 
	 * 主贴id
	 **/
	private $mainThreadId;
	
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

	public function setMainThreadId($mainThreadId)
	{
		$this->mainThreadId = $mainThreadId;
		$this->apiParas["main_thread_id"] = $mainThreadId;
	}

	public function getMainThreadId()
	{
		return $this->mainThreadId;
	}

	public function getApiMethodName()
	{
		return "taobao.bbs.reply.idlist.pull";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->boardId,"boardId");
		RequestCheckUtil::checkNotNull($this->mainThreadId,"mainThreadId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
