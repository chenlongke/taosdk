<?php
/**
 * TOP API: taobao.crm.comment.add request
 * 
 * @author auto create
 * @since 1.0, 2013-10-31 00:00:00
 */
class CrmCommentAddRequest
{
	/** 
	 * 会员Nick
	 **/
	private $buyerNick;
	
	/** 
	 * 增加会员备注
	 **/
	private $comment;
	
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

	public function getApiMethodName()
	{
		return "taobao.crm.comment.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->comment,"comment");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
