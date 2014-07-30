<?php
/**
 * TOP API: alibaba.jae.app.create request
 * 
 * @author auto create
 * @since 1.0, 2014-03-11 00:00:00
 */
class AlibabaJaeAppCreateRequest
{
	/** 
	 * 应用的英文名称，会被用作域名
	 **/
	private $appname;
	
	/** 
	 * AE接入的指定业务类型，支付宝公众平台是21
	 **/
	private $biztype;
	
	/** 
	 * 可以是Php或Java
	 **/
	private $language;
	
	/** 
	 * 创建JAE应用的ISV或商户的淘宝昵称
	 **/
	private $nick;
	
	/** 
	 * 应用的中文标题
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setAppname($appname)
	{
		$this->appname = $appname;
		$this->apiParas["appname"] = $appname;
	}

	public function getAppname()
	{
		return $this->appname;
	}

	public function setBiztype($biztype)
	{
		$this->biztype = $biztype;
		$this->apiParas["biztype"] = $biztype;
	}

	public function getBiztype()
	{
		return $this->biztype;
	}

	public function setLanguage($language)
	{
		$this->language = $language;
		$this->apiParas["language"] = $language;
	}

	public function getLanguage()
	{
		return $this->language;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
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

	public function getApiMethodName()
	{
		return "alibaba.jae.app.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appname,"appname");
		RequestCheckUtil::checkNotNull($this->biztype,"biztype");
		RequestCheckUtil::checkNotNull($this->language,"language");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
