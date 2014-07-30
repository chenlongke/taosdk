<?php
/**
 * TOP API: taobao.kelude.issue.comment.create request
 * 
 * @author auto create
 * @since 1.0, 2014-03-31 00:00:00
 */
class KeludeIssueCommentCreateRequest
{
	/** 
	 * 评论内容
	 **/
	private $content;
	
	/** 
	 * 评论对应的缺陷ID
	 **/
	private $targetId;
	
	/** 
	 * 评论类型
	 **/
	private $targetType;
	
	/** 
	 * 评论创建者的用户标识
	 **/
	private $user;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setTargetId($targetId)
	{
		$this->targetId = $targetId;
		$this->apiParas["target_id"] = $targetId;
	}

	public function getTargetId()
	{
		return $this->targetId;
	}

	public function setTargetType($targetType)
	{
		$this->targetType = $targetType;
		$this->apiParas["target_type"] = $targetType;
	}

	public function getTargetType()
	{
		return $this->targetType;
	}

	public function setUser($user)
	{
		$this->user = $user;
		$this->apiParas["user"] = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.issue.comment.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->targetId,"targetId");
		RequestCheckUtil::checkNotNull($this->targetType,"targetType");
		RequestCheckUtil::checkNotNull($this->user,"user");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
