<?php
/**
 * TOP API: taobao.jindoucloud.message.send request
 * 
 * @author auto create
 * @since 1.0, 2014-03-05 00:00:00
 */
class JindoucloudMessageSendRequest
{
	/** 
	 * 发送的消息。参数说明：
<div>nick：接收者，支持子账号 ，必填
<div>title：展示的标题，必填
<div>biz_id：业务id，同一个业务可以变化多次，即有多个状态的迁移。比如：交易消息的状态迁移。可选
<div>send_no：发送的消息编号，服务端会用appkey+user+send_no对消息做重复发送的控制，必填。
<div>msg_category：分配给isv的允许发送的一级类目。必填
<div>msg_type：分配给isv的允许发送的一级类目下的二级类目，必填。
<div>view_data：json数据，在客户端展示的数据，最多5个。可选。
<div>biz_data：消息跳转到插件，插件需要处理这条消息需要的参数，可选。
	 **/
	private $messages;
	
	private $apiParas = array();
	
	public function setMessages($messages)
	{
		$this->messages = $messages;
		$this->apiParas["messages"] = $messages;
	}

	public function getMessages()
	{
		return $this->messages;
	}

	public function getApiMethodName()
	{
		return "taobao.jindoucloud.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->messages,"messages");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
