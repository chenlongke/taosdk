<?php
/**
 * TOP API: taobao.wangwang.eservice.chatrecordex.get request
 * 
 * @author auto create
 * @since 1.0, 2012-11-05 00:00:00
 */
class WangwangEserviceChatrecordexGetRequest
{
	/** 
	 * 聊天记录查询结束时间。格式为： YYYY-mm-dd_HH:MM:SS
	 **/
	private $endDate;
	
	/** 
	 * 发送者ID，格式为cntaobao+淘宝nick
如：发送者淘宝nick为ABC，则from_id为cntaobaoABC
	 **/
	private $fromId;
	
	/** 
	 * 聊天记录查询的开始时间。格式为：
YYYY-mm-dd_HH:MM:SS
	 **/
	private $startDate;
	
	/** 
	 * 接收者ID，格式为cntaobao+淘宝nick，如：
接收者淘宝nick为July，则to_id为cntaobaoJuly
	 **/
	private $toId;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setFromId($fromId)
	{
		$this->fromId = $fromId;
		$this->apiParas["from_id"] = $fromId;
	}

	public function getFromId()
	{
		return $this->fromId;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setToId($toId)
	{
		$this->toId = $toId;
		$this->apiParas["to_id"] = $toId;
	}

	public function getToId()
	{
		return $this->toId;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.eservice.chatrecordex.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkMaxLength($this->endDate,19,"endDate");
		RequestCheckUtil::checkNotNull($this->fromId,"fromId");
		RequestCheckUtil::checkMaxLength($this->fromId,64,"fromId");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
		RequestCheckUtil::checkMaxLength($this->startDate,19,"startDate");
		RequestCheckUtil::checkNotNull($this->toId,"toId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
