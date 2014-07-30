<?php
/**
 * TOP API: taobao.jianghu.msg.publish request
 * 
 * @author auto create
 * @since 1.0, 2012-11-26 00:00:00
 */
class JianghuMsgPublishRequest
{
	/** 
	 * 消息内容（最长500个字符，一个汉字或者一个英文字母或者一个标点符号都算作一个字符）社区动态/消息格式
	 **/
	private $content;
	
	/** 
	 * 消息接受者(须数字)
	 **/
	private $toUid;
	
	/** 
	 * 消息类型（ISV自定义，统计需要）必须是数字取值范围[0,127]
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

	public function setToUid($toUid)
	{
		$this->toUid = $toUid;
		$this->apiParas["to_uid"] = $toUid;
	}

	public function getToUid()
	{
		return $this->toUid;
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
		return "taobao.jianghu.msg.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->toUid,"toUid");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
