<?php
/**
 * TOP API: alibaba.qixinbao.message.send request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class AlibabaQixinbaoMessageSendRequest
{
	/** 
	 * 应用host
	 **/
	private $appHost;
	
	/** 
	 * 发送方
	 **/
	private $from;
	
	/** 
	 * 内容
	 **/
	private $message;
	
	/** 
	 * 发送时间
	 **/
	private $sendTimeStamp;
	
	/** 
	 * 标签
	 **/
	private $tag;
	
	/** 
	 * 标题
	 **/
	private $title;
	
	/** 
	 * 接受方
	 **/
	private $to;
	
	/** 
	 * 主题
	 **/
	private $topic;
	
	/** 
	 * 跳转地址
	 **/
	private $url;
	
	/** 
	 * 生效时间
	 **/
	private $validateTime;
	
	private $apiParas = array();
	
	public function setAppHost($appHost)
	{
		$this->appHost = $appHost;
		$this->apiParas["app_host"] = $appHost;
	}

	public function getAppHost()
	{
		return $this->appHost;
	}

	public function setFrom($from)
	{
		$this->from = $from;
		$this->apiParas["from"] = $from;
	}

	public function getFrom()
	{
		return $this->from;
	}

	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setSendTimeStamp($sendTimeStamp)
	{
		$this->sendTimeStamp = $sendTimeStamp;
		$this->apiParas["send_time_stamp"] = $sendTimeStamp;
	}

	public function getSendTimeStamp()
	{
		return $this->sendTimeStamp;
	}

	public function setTag($tag)
	{
		$this->tag = $tag;
		$this->apiParas["tag"] = $tag;
	}

	public function getTag()
	{
		return $this->tag;
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

	public function setTo($to)
	{
		$this->to = $to;
		$this->apiParas["to"] = $to;
	}

	public function getTo()
	{
		return $this->to;
	}

	public function setTopic($topic)
	{
		$this->topic = $topic;
		$this->apiParas["topic"] = $topic;
	}

	public function getTopic()
	{
		return $this->topic;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function setValidateTime($validateTime)
	{
		$this->validateTime = $validateTime;
		$this->apiParas["validate_time"] = $validateTime;
	}

	public function getValidateTime()
	{
		return $this->validateTime;
	}

	public function getApiMethodName()
	{
		return "alibaba.qixinbao.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appHost,"appHost");
		RequestCheckUtil::checkNotNull($this->from,"from");
		RequestCheckUtil::checkNotNull($this->message,"message");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->to,"to");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
