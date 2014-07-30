<?php
/**
 * TOP API: taobao.qianniu.task.create request
 * 
 * @author auto create
 * @since 1.0, 2013-12-25 00:00:00
 */
class QianniuTaskCreateRequest
{
	/** 
	 * 任务元数据，JSON格式，例如：
meta= {
		"title" : "xxx",
		"content" : "yyyyyy",
		"biz_sys_id" : 12232,
		"biz_sys_task_type" : 1212,
		"start_time" : 1380173565480,
		"end_time" : 1380173565480,
		"sender_uid" : 213123213,
		"sender_nick" : "tbtest1063",
		"reminder_flag" : 1,
		"finish_strategy" : 1,
                "priority":1,
                "memo":"it is memo"
	}
	 **/
	private $meta;
	
	/** 
	 * 任务列表，JSON格式，例如：
tasks =[{
			"receiver_uid" : 123,
			"receiver_nick" : "nick",
			"status" : 1,
			"sub_status" : 1,
			"biz_type" : "item",
			"sub_biz_type" : "ItemAdd",
			"biz_id" : 1,
			"biz_param" : "x=2&y=3",
			"biz_entry" : "app:xs34yt777"
		}, {
			"receiver_uid" : 456,
			"receiver_nick" : "nick2",
			"status" : 1,
			"sub_status" : 1,
"biz_type" : "item",
			"sub_biz_type" : "ItemAdd",
			"biz_id" : 2,
			"biz_param" : "x=2&y=3",
			"biz_entry" : "app:xs34yt777"
		}
	]
	 **/
	private $tasks;
	
	private $apiParas = array();
	
	public function setMeta($meta)
	{
		$this->meta = $meta;
		$this->apiParas["meta"] = $meta;
	}

	public function getMeta()
	{
		return $this->meta;
	}

	public function setTasks($tasks)
	{
		$this->tasks = $tasks;
		$this->apiParas["tasks"] = $tasks;
	}

	public function getTasks()
	{
		return $this->tasks;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.task.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->meta,"meta");
		RequestCheckUtil::checkNotNull($this->tasks,"tasks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
