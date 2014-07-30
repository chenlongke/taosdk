<?php
/**
 * TOP API: taobao.jianghu.msg.publishSys request
 * 
 * @author auto create
 * @since 1.0, 2012-11-26 00:00:00
 */
class JianghuMsgPublishSysRequest
{
	/** 
	 * 消息内容（最长500个字符，一个汉字或者一个英文字母或者一个标点符号都算作一个字符）社区动态/消息格式
	 **/
	private $content;
	
	/** 
	 * 消息接受者(须数字，最长20位)
	 **/
	private $toUid;
	
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

	public function getApiMethodName()
	{
		return "taobao.jianghu.msg.publishSys";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->toUid,"toUid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
