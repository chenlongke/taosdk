<?php
/**
 * TOP API: taobao.jianghu.customdata.updateCustomData request
 * 
 * @author auto create
 * @since 1.0, 2011-09-13 00:00:00
 */
class JianghuCustomdataUpdateCustomDataRequest
{
	/** 
	 * 个性化显示的内容（最多两个字符，一个中文字符和一个英文字符的长度都是1）
	 **/
	private $content;
	
	/** 
	 * 个性化内容的图标，最多128个字符，一个中文字符和一个英文字符的长度都是1
	 **/
	private $icon;
	
	/** 
	 * 需要修改数据的用户id(须数字)
	 **/
	private $uid;
	
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

	public function setIcon($icon)
	{
		$this->icon = $icon;
		$this->apiParas["icon"] = $icon;
	}

	public function getIcon()
	{
		return $this->icon;
	}

	public function setUid($uid)
	{
		$this->uid = $uid;
		$this->apiParas["uid"] = $uid;
	}

	public function getUid()
	{
		return $this->uid;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.customdata.updateCustomData";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->icon,"icon");
		RequestCheckUtil::checkNotNull($this->uid,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
