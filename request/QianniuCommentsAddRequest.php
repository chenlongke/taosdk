<?php
/**
 * TOP API: taobao.qianniu.comments.add request
 * 
 * @author auto create
 * @since 1.0, 2014-02-21 00:00:00
 */
class QianniuCommentsAddRequest
{
	/** 
	 * 活动id
	 **/
	private $activityId;
	
	/** 
	 * 是否匿名  可选
	 **/
	private $anonymous;
	
	/** 
	 * 评论内容
	 **/
	private $content;
	
	/** 
	 * 你要回复的评论id
	 **/
	private $replyedId;
	
	private $apiParas = array();
	
	public function setActivityId($activityId)
	{
		$this->activityId = $activityId;
		$this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId()
	{
		return $this->activityId;
	}

	public function setAnonymous($anonymous)
	{
		$this->anonymous = $anonymous;
		$this->apiParas["anonymous"] = $anonymous;
	}

	public function getAnonymous()
	{
		return $this->anonymous;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setReplyedId($replyedId)
	{
		$this->replyedId = $replyedId;
		$this->apiParas["replyed_id"] = $replyedId;
	}

	public function getReplyedId()
	{
		return $this->replyedId;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.comments.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkNotNull($this->content,"content");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
