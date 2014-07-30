<?php
/**
 * TOP API: taobao.qianniu.task.update request
 * 
 * @author auto create
 * @since 1.0, 2014-02-19 00:00:00
 */
class QianniuTaskUpdateRequest
{
	/** 
	 * 应用自定义参数
	 **/
	private $bizParam;
	
	/** 
	 * 任务备注。当memo_mode为1时，memo将采用追加方式。
	 **/
	private $memo;
	
	/** 
	 * 表示memo字段的更新策略。如需采用追加方式的，请将此字段设置为1。
	 **/
	private $memoMode;
	
	/** 
	 * 0为不提醒，1为全部提醒，2为PC提醒，3为移动提醒，4为已提醒，5为已忽略。
	 **/
	private $remindFlag;
	
	/** 
	 * 提醒时间，时间的毫秒数
	 **/
	private $remindTime;
	
	/** 
	 * 状态值，多个以逗号分隔
	 **/
	private $status;
	
	/** 
	 * 子任务状态，由业务方自定义
	 **/
	private $subStatus;
	
	/** 
	 * 任务标签
	 **/
	private $tag;
	
	/** 
	 * 任务ID
	 **/
	private $taskId;
	
	private $apiParas = array();
	
	public function setBizParam($bizParam)
	{
		$this->bizParam = $bizParam;
		$this->apiParas["biz_param"] = $bizParam;
	}

	public function getBizParam()
	{
		return $this->bizParam;
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

	public function setMemoMode($memoMode)
	{
		$this->memoMode = $memoMode;
		$this->apiParas["memo_mode"] = $memoMode;
	}

	public function getMemoMode()
	{
		return $this->memoMode;
	}

	public function setRemindFlag($remindFlag)
	{
		$this->remindFlag = $remindFlag;
		$this->apiParas["remind_flag"] = $remindFlag;
	}

	public function getRemindFlag()
	{
		return $this->remindFlag;
	}

	public function setRemindTime($remindTime)
	{
		$this->remindTime = $remindTime;
		$this->apiParas["remind_time"] = $remindTime;
	}

	public function getRemindTime()
	{
		return $this->remindTime;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setSubStatus($subStatus)
	{
		$this->subStatus = $subStatus;
		$this->apiParas["sub_status"] = $subStatus;
	}

	public function getSubStatus()
	{
		return $this->subStatus;
	}

	public function setTag($tag)
	{
		$this->tag = $tag;
		$this->apiParas["tag"] = $tag;
	}

	public function getTag()
	{
		return $this->tag;
	}

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.task.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->taskId,"taskId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
