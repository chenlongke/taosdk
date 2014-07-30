<?php
/**
 * TOP API: taobao.ts.subscription.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-03 00:00:00
 */
class TsSubscriptionGetRequest
{
	/** 
	 * 订购用户昵称
	 **/
	private $nick;
	
	/** 
	 * 服务收费项code
	 **/
	private $servcieItemCode;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setServcieItemCode($servcieItemCode)
	{
		$this->servcieItemCode = $servcieItemCode;
		$this->apiParas["servcie_item_code"] = $servcieItemCode;
	}

	public function getServcieItemCode()
	{
		return $this->servcieItemCode;
	}

	public function getApiMethodName()
	{
		return "taobao.ts.subscription.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkMaxLength($this->nick,32,"nick");
		RequestCheckUtil::checkNotNull($this->servcieItemCode,"servcieItemCode");
		RequestCheckUtil::checkMaxLength($this->servcieItemCode,64,"servcieItemCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
