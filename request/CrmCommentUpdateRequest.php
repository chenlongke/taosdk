<?php
/**
 * TOP API: taobao.crm.comment.update request
 * 
 * @author auto create
 * @since 1.0, 2013-10-31 00:00:00
 */
class CrmCommentUpdateRequest
{
	/** 
	 * 会员Nick
	 **/
	private $buyerNick;
	
	/** 
	 * 增加会员备注
	 **/
	private $comment;
	
	/** 
	 * 备注id
	 **/
	private $commentId;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setComment($comment)
	{
		$this->comment = $comment;
		$this->apiParas["comment"] = $comment;
	}

	public function getComment()
	{
		return $this->comment;
	}

	public function setCommentId($commentId)
	{
		$this->commentId = $commentId;
		$this->apiParas["comment_id"] = $commentId;
	}

	public function getCommentId()
	{
		return $this->commentId;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.comment.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->comment,"comment");
		RequestCheckUtil::checkNotNull($this->commentId,"commentId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
