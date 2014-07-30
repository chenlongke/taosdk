<?php
/**
 * TOP API: alibaba.wangqi.message.send request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class AlibabaWangqiMessageSendRequest
{
	/** 
	 * 可选  点击消息体触发的action
	 **/
	private $action;
	
	/** 
	 * 可选  <业务自定义数据, 透传给业务插件>"由各业务自行定义
	 **/
	private $data;
	
	/** 
	 * 可选  过期UTC时间字符串, 单位秒
	 **/
	private $exprieTime;
	
	/** 
	 * 可选  icon url地址,未提供则显示msg type默认图标
	 **/
	private $icon;
	
	/** 
	 * 消息分类id, 同一个item_id消息多次发送会按时间覆盖, 可以通过utc时间毫秒数或者UUID生成item_id.
	 **/
	private $itemId;
	
	/** 
	 * 发送的消息类型, cnsysmsg + <msg type id>
	 **/
	private $msgType;
	
	/** 
	 * 消息摘要
	 **/
	private $summary;
	
	/** 
	 * 消息标题
	 **/
	private $title;
	
	/** 
	 * 模板数据 格式为json字符串
	 **/
	private $tmpData;
	
	/** 
	 * 模板ID
	 **/
	private $tmpId;
	
	/** 
	 * 部门编号或者个人账号
	 **/
	private $toAccount;
	
	/** 
	 * 发送目标类型, 1-部门, 2-人员
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setAction($action)
	{
		$this->action = $action;
		$this->apiParas["action"] = $action;
	}

	public function getAction()
	{
		return $this->action;
	}

	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setExprieTime($exprieTime)
	{
		$this->exprieTime = $exprieTime;
		$this->apiParas["exprie_time"] = $exprieTime;
	}

	public function getExprieTime()
	{
		return $this->exprieTime;
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

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setMsgType($msgType)
	{
		$this->msgType = $msgType;
		$this->apiParas["msg_type"] = $msgType;
	}

	public function getMsgType()
	{
		return $this->msgType;
	}

	public function setSummary($summary)
	{
		$this->summary = $summary;
		$this->apiParas["summary"] = $summary;
	}

	public function getSummary()
	{
		return $this->summary;
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

	public function setTmpData($tmpData)
	{
		$this->tmpData = $tmpData;
		$this->apiParas["tmp_data"] = $tmpData;
	}

	public function getTmpData()
	{
		return $this->tmpData;
	}

	public function setTmpId($tmpId)
	{
		$this->tmpId = $tmpId;
		$this->apiParas["tmp_id"] = $tmpId;
	}

	public function getTmpId()
	{
		return $this->tmpId;
	}

	public function setToAccount($toAccount)
	{
		$this->toAccount = $toAccount;
		$this->apiParas["to_account"] = $toAccount;
	}

	public function getToAccount()
	{
		return $this->toAccount;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alibaba.wangqi.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->msgType,"msgType");
		RequestCheckUtil::checkNotNull($this->summary,"summary");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->tmpData,"tmpData");
		RequestCheckUtil::checkNotNull($this->tmpId,"tmpId");
		RequestCheckUtil::checkNotNull($this->toAccount,"toAccount");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
