<?php
/**
 * TOP API: taobao.fang.news.publish request
 * 
 * @author auto create
 * @since 1.0, 2013-08-12 00:00:00
 */
class FangNewsPublishRequest
{
	/** 
	 * 楼盘ID
	 **/
	private $buildingId;
	
	/** 
	 * 资讯详细内容
	 **/
	private $messageContent;
	
	/** 
	 * 资讯的标题
	 **/
	private $messageTitle;
	
	/** 
	 * 资讯的类型
	 **/
	private $messageType;
	
	/** 
	 * 新闻的来源媒体
	 **/
	private $newsSource;
	
	/** 
	 * 新闻的类型
	 **/
	private $newsType;
	
	/** 
	 * 外部资讯id,请保持其唯一性
	 **/
	private $outerMessageId;
	
	/** 
	 * 资讯发表的时间
	 **/
	private $publishTime;
	
	private $apiParas = array();
	
	public function setBuildingId($buildingId)
	{
		$this->buildingId = $buildingId;
		$this->apiParas["building_id"] = $buildingId;
	}

	public function getBuildingId()
	{
		return $this->buildingId;
	}

	public function setMessageContent($messageContent)
	{
		$this->messageContent = $messageContent;
		$this->apiParas["message_content"] = $messageContent;
	}

	public function getMessageContent()
	{
		return $this->messageContent;
	}

	public function setMessageTitle($messageTitle)
	{
		$this->messageTitle = $messageTitle;
		$this->apiParas["message_title"] = $messageTitle;
	}

	public function getMessageTitle()
	{
		return $this->messageTitle;
	}

	public function setMessageType($messageType)
	{
		$this->messageType = $messageType;
		$this->apiParas["message_type"] = $messageType;
	}

	public function getMessageType()
	{
		return $this->messageType;
	}

	public function setNewsSource($newsSource)
	{
		$this->newsSource = $newsSource;
		$this->apiParas["news_source"] = $newsSource;
	}

	public function getNewsSource()
	{
		return $this->newsSource;
	}

	public function setNewsType($newsType)
	{
		$this->newsType = $newsType;
		$this->apiParas["news_type"] = $newsType;
	}

	public function getNewsType()
	{
		return $this->newsType;
	}

	public function setOuterMessageId($outerMessageId)
	{
		$this->outerMessageId = $outerMessageId;
		$this->apiParas["outer_message_id"] = $outerMessageId;
	}

	public function getOuterMessageId()
	{
		return $this->outerMessageId;
	}

	public function setPublishTime($publishTime)
	{
		$this->publishTime = $publishTime;
		$this->apiParas["publish_time"] = $publishTime;
	}

	public function getPublishTime()
	{
		return $this->publishTime;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.news.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buildingId,"buildingId");
		RequestCheckUtil::checkNotNull($this->messageContent,"messageContent");
		RequestCheckUtil::checkNotNull($this->messageTitle,"messageTitle");
		RequestCheckUtil::checkNotNull($this->messageType,"messageType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
