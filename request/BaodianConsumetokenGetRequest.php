<?php
/**
 * TOP API: taobao.baodian.consumetoken.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-10 00:00:00
 */
class BaodianConsumetokenGetRequest
{
	/** 
	 * 用户消费的宝点数量
	 **/
	private $amount;
	
	/** 
	 * 游戏的订单号id
	 **/
	private $appOrderId;
	
	/** 
	 * 对游戏厂商消费宝点发起回调的url
	 **/
	private $notifyUrl;
	
	/** 
	 * sdk版本
	 **/
	private $sdkVer;
	
	/** 
	 * 对消费宝点的描述
	 **/
	private $title;
	
	/** 
	 * 用户字符串ID
	 **/
	private $userStrId;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function setAppOrderId($appOrderId)
	{
		$this->appOrderId = $appOrderId;
		$this->apiParas["app_order_id"] = $appOrderId;
	}

	public function getAppOrderId()
	{
		return $this->appOrderId;
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl = $notifyUrl;
		$this->apiParas["notify_url"] = $notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setSdkVer($sdkVer)
	{
		$this->sdkVer = $sdkVer;
		$this->apiParas["sdk_ver"] = $sdkVer;
	}

	public function getSdkVer()
	{
		return $this->sdkVer;
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

	public function setUserStrId($userStrId)
	{
		$this->userStrId = $userStrId;
		$this->apiParas["user_str_id"] = $userStrId;
	}

	public function getUserStrId()
	{
		return $this->userStrId;
	}

	public function getApiMethodName()
	{
		return "taobao.baodian.consumetoken.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
		RequestCheckUtil::checkNotNull($this->appOrderId,"appOrderId");
		RequestCheckUtil::checkNotNull($this->notifyUrl,"notifyUrl");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->userStrId,"userStrId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
