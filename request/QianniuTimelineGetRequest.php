<?php
/**
 * TOP API: taobao.qianniu.timeline.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class QianniuTimelineGetRequest
{
	/** 
	 * 截止时间 精确到秒
	 **/
	private $endTime;
	
	/** 
	 * 如果不设，默认值就是0；
1：表示只返回活动信息
	 **/
	private $filterType;
	
	/** 
	 * 每页数据长度
	 **/
	private $pageSize;
	
	/** 
	 * 起始时间，精确到秒
	 **/
	private $startTime;
	
	/** 
	 * 服务号编码，多个服务号逗号分隔
	 **/
	private $topicName;
	
	/** 
	 * 过滤类型，1：所有feeds,默认值;2:根据过滤条件进行过滤，过滤值由filterType指定；3：返回广场数据
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFilterType($filterType)
	{
		$this->filterType = $filterType;
		$this->apiParas["filter_type"] = $filterType;
	}

	public function getFilterType()
	{
		return $this->filterType;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTopicName($topicName)
	{
		$this->topicName = $topicName;
		$this->apiParas["topic_name"] = $topicName;
	}

	public function getTopicName()
	{
		return $this->topicName;
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
		return "taobao.qianniu.timeline.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
