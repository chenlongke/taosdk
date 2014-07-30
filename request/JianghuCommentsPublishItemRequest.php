<?php
/**
 * TOP API: taobao.jianghu.comments.publish.item request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class JianghuCommentsPublishItemRequest
{
	/** 
	 * 评论的内容
	 **/
	private $content;
	
	/** 
	 * 卖家id
	 **/
	private $recUserId;
	
	/** 
	 * 回复时传入，被回复的评论id
	 **/
	private $replyToCommentId;
	
	/** 
	 * 回复时传入，被回复的用户id
	 **/
	private $replyToUserId;
	
	/** 
	 * 商品id
	 **/
	private $targetKey;
	
	/** 
	 * 商品标题
	 **/
	private $title;
	
	/** 
	 * 101：闲置评论
	 **/
	private $type;
	
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

	public function setRecUserId($recUserId)
	{
		$this->recUserId = $recUserId;
		$this->apiParas["rec_user_id"] = $recUserId;
	}

	public function getRecUserId()
	{
		return $this->recUserId;
	}

	public function setReplyToCommentId($replyToCommentId)
	{
		$this->replyToCommentId = $replyToCommentId;
		$this->apiParas["reply_to_comment_id"] = $replyToCommentId;
	}

	public function getReplyToCommentId()
	{
		return $this->replyToCommentId;
	}

	public function setReplyToUserId($replyToUserId)
	{
		$this->replyToUserId = $replyToUserId;
		$this->apiParas["reply_to_user_id"] = $replyToUserId;
	}

	public function getReplyToUserId()
	{
		return $this->replyToUserId;
	}

	public function setTargetKey($targetKey)
	{
		$this->targetKey = $targetKey;
		$this->apiParas["target_key"] = $targetKey;
	}

	public function getTargetKey()
	{
		return $this->targetKey;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.comments.publish.item";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->recUserId,"recUserId");
		RequestCheckUtil::checkNotNull($this->targetKey,"targetKey");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
