<?php
/**
 * TOP API: taobao.jianghu.notify.fuchu request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class JianghuNotifyFuchuRequest
{
	/** 
	 * 发送给旺旺浮出的文案.
1.最多1024个字符。
2.必须为html片段，此html片段只包括br，a，div标签，其中div标签只支持style属性，其它的标签和属性都会被过滤掉
3.isv需要调整htm的高度，宽度适应浮出大小。
	 **/
	private $content;
	
	/** 
	 * 旺旺浮出的接受者，为数字id
	 **/
	private $receiverUid;
	
	/** 
	 * 旺旺浮出的发送者，此值为用户的数字id
	 **/
	private $senderUid;
	
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

	public function setReceiverUid($receiverUid)
	{
		$this->receiverUid = $receiverUid;
		$this->apiParas["receiver_uid"] = $receiverUid;
	}

	public function getReceiverUid()
	{
		return $this->receiverUid;
	}

	public function setSenderUid($senderUid)
	{
		$this->senderUid = $senderUid;
		$this->apiParas["sender_uid"] = $senderUid;
	}

	public function getSenderUid()
	{
		return $this->senderUid;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.notify.fuchu";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkMaxLength($this->content,1024,"content");
		RequestCheckUtil::checkNotNull($this->receiverUid,"receiverUid");
		RequestCheckUtil::checkNotNull($this->senderUid,"senderUid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
