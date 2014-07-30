<?php
/**
 * TOP API: alibaba.security.snsmessage.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-02 00:00:00
 */
class AlibabaSecuritySnsmessageAddRequest
{
	/** 
	 * 发、回、转微博等信息的账号
	 **/
	private $account;
	
	/** 
	 * 触发消息的动作，比如发微博（post），转发微博（forward），回微博（reply）等
	 **/
	private $actiontype;
	
	/** 
	 * 微博，博客，帖子等信息内容， 这个内容是发生发、回、转信息时候用户输入的内容。
	 **/
	private $content;
	
	/** 
	 * 外部应用唯一标示这条消息的id，用于交互之间的数据识别
	 **/
	private $externalid;
	
	/** 
	 * 消息类型， 比如microblog，blog，posting等
	 **/
	private $msgtype;
	
	/** 
	 * 消息来源， 比如来源于新浪微博weibo.com
	 **/
	private $source;
	
	/** 
	 * 信息中包含的淘宝信息url ，以半角','号分割，最大长度50
	 **/
	private $tburls;
	
	/** 
	 * 信息发布的时间
	 **/
	private $time;
	
	private $apiParas = array();
	
	public function setAccount($account)
	{
		$this->account = $account;
		$this->apiParas["account"] = $account;
	}

	public function getAccount()
	{
		return $this->account;
	}

	public function setActiontype($actiontype)
	{
		$this->actiontype = $actiontype;
		$this->apiParas["actiontype"] = $actiontype;
	}

	public function getActiontype()
	{
		return $this->actiontype;
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

	public function setExternalid($externalid)
	{
		$this->externalid = $externalid;
		$this->apiParas["externalid"] = $externalid;
	}

	public function getExternalid()
	{
		return $this->externalid;
	}

	public function setMsgtype($msgtype)
	{
		$this->msgtype = $msgtype;
		$this->apiParas["msgtype"] = $msgtype;
	}

	public function getMsgtype()
	{
		return $this->msgtype;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setTburls($tburls)
	{
		$this->tburls = $tburls;
		$this->apiParas["tburls"] = $tburls;
	}

	public function getTburls()
	{
		return $this->tburls;
	}

	public function setTime($time)
	{
		$this->time = $time;
		$this->apiParas["time"] = $time;
	}

	public function getTime()
	{
		return $this->time;
	}

	public function getApiMethodName()
	{
		return "alibaba.security.snsmessage.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->account,"account");
		RequestCheckUtil::checkMaxLength($this->account,64,"account");
		RequestCheckUtil::checkNotNull($this->actiontype,"actiontype");
		RequestCheckUtil::checkMaxLength($this->actiontype,32,"actiontype");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->externalid,"externalid");
		RequestCheckUtil::checkNotNull($this->msgtype,"msgtype");
		RequestCheckUtil::checkMaxLength($this->msgtype,32,"msgtype");
		RequestCheckUtil::checkNotNull($this->source,"source");
		RequestCheckUtil::checkMaxLength($this->source,64,"source");
		RequestCheckUtil::checkMaxListSize($this->tburls,50,"tburls");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
