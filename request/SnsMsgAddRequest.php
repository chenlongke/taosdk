<?php
/**
 * TOP API: taobao.sns.msg.add request
 * 
 * @author auto create
 * @since 1.0, 2014-03-03 00:00:00
 */
class SnsMsgAddRequest
{
	/** 
	 * 链接上的文字，默认为“查看详情”
	 **/
	private $actionName;
	
	/** 
	 * 点击连接，可以自动识别用户环境，并完成跳转对应的购买页，手机端可以跳到手机购买页，PC端跳到PC购买页
	 **/
	private $actionUrl;
	
	/** 
	 * 接入应用在消息系统中的标示，用来在消息系统中展示相关应用内容。需要在接入前由接入方在消息系统中申请，由消息系统分配。
	 **/
	private $appId;
	
	/** 
	 * 消息的主内容(16个汉字，如果没有附加内容，可以32个汉字)
	 **/
	private $content;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 默认false，标识是否需要返回的消息id
	 **/
	private $needMsgId;
	
	/** 
	 * 消息里的图片，如果没有默认使用itemId对应的商品图
	 **/
	private $picUrl;
	
	/** 
	 * 消息的附加内容(16汉字内)
	 **/
	private $subContent;
	
	/** 
	 * 消息的标题（16字以内，主客push的内容体）
	 **/
	private $title;
	
	/** 
	 * 消息系统中的子类型，同num_app_id在接入时一起在消息系统中申请
	 **/
	private $typeId;
	
	private $apiParas = array();
	
	public function setActionName($actionName)
	{
		$this->actionName = $actionName;
		$this->apiParas["action_name"] = $actionName;
	}

	public function getActionName()
	{
		return $this->actionName;
	}

	public function setActionUrl($actionUrl)
	{
		$this->actionUrl = $actionUrl;
		$this->apiParas["action_url"] = $actionUrl;
	}

	public function getActionUrl()
	{
		return $this->actionUrl;
	}

	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["app_id"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
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

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setNeedMsgId($needMsgId)
	{
		$this->needMsgId = $needMsgId;
		$this->apiParas["need_msg_id"] = $needMsgId;
	}

	public function getNeedMsgId()
	{
		return $this->needMsgId;
	}

	public function setPicUrl($picUrl)
	{
		$this->picUrl = $picUrl;
		$this->apiParas["pic_url"] = $picUrl;
	}

	public function getPicUrl()
	{
		return $this->picUrl;
	}

	public function setSubContent($subContent)
	{
		$this->subContent = $subContent;
		$this->apiParas["sub_content"] = $subContent;
	}

	public function getSubContent()
	{
		return $this->subContent;
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

	public function setTypeId($typeId)
	{
		$this->typeId = $typeId;
		$this->apiParas["type_id"] = $typeId;
	}

	public function getTypeId()
	{
		return $this->typeId;
	}

	public function getApiMethodName()
	{
		return "taobao.sns.msg.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actionUrl,"actionUrl");
		RequestCheckUtil::checkNotNull($this->appId,"appId");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->typeId,"typeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
