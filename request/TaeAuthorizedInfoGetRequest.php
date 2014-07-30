<?php
/**
 * TOP API: taobao.tae.authorized.info.get request
 * 
 * @author auto create
 * @since 1.0, 2013-10-15 00:00:00
 */
class TaeAuthorizedInfoGetRequest
{
	/** 
	 * appkey, app标识
	 **/
	private $app;
	
	/** 
	 * 用户nick
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setApp($app)
	{
		$this->app = $app;
		$this->apiParas["app"] = $app;
	}

	public function getApp()
	{
		return $this->app;
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

	public function getApiMethodName()
	{
		return "taobao.tae.authorized.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->app,"app");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
