<?php
/**
 * TOP API: tmall.cwf.polltask request
 * 
 * @author auto create
 * @since 1.0, 2013-07-05 00:00:00
 */
class TmallCwfPolltaskRequest
{
	/** 
	 * appkey
	 **/
	private $appkey;
	
	/** 
	 * 密文
	 **/
	private $cipherText;
	
	/** 
	 * 流程域名
	 **/
	private $domain;
	
	/** 
	 * 备注信息
	 **/
	private $memo;
	
	/** 
	 * 服务组名称
	 **/
	private $taskGroup;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setCipherText($cipherText)
	{
		$this->cipherText = $cipherText;
		$this->apiParas["cipher_text"] = $cipherText;
	}

	public function getCipherText()
	{
		return $this->cipherText;
	}

	public function setDomain($domain)
	{
		$this->domain = $domain;
		$this->apiParas["domain"] = $domain;
	}

	public function getDomain()
	{
		return $this->domain;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setTaskGroup($taskGroup)
	{
		$this->taskGroup = $taskGroup;
		$this->apiParas["task_group"] = $taskGroup;
	}

	public function getTaskGroup()
	{
		return $this->taskGroup;
	}

	public function getApiMethodName()
	{
		return "tmall.cwf.polltask";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appkey,"appkey");
		RequestCheckUtil::checkNotNull($this->cipherText,"cipherText");
		RequestCheckUtil::checkMaxLength($this->cipherText,4000,"cipherText");
		RequestCheckUtil::checkNotNull($this->domain,"domain");
		RequestCheckUtil::checkMaxLength($this->domain,256,"domain");
		RequestCheckUtil::checkNotNull($this->memo,"memo");
		RequestCheckUtil::checkMaxLength($this->memo,256,"memo");
		RequestCheckUtil::checkNotNull($this->taskGroup,"taskGroup");
		RequestCheckUtil::checkMaxLength($this->taskGroup,256,"taskGroup");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
