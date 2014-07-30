<?php
/**
 * TOP API: taobao.qianniu.comments.action request
 * 
 * @author auto create
 * @since 1.0, 2014-02-21 00:00:00
 */
class QianniuCommentsActionRequest
{
	/** 
	 * 1标记广告  2 赞 3 隐藏 4 置顶
	 **/
	private $actionType;
	
	/** 
	 * 活动id
	 **/
	private $activityId;
	
	/** 
	 * 评论id
	 **/
	private $cmtId;
	
	/** 
	 * 所有动作对应取消操作  默认可以不填  不填表示不是取消动作
	 **/
	private $isCancel;
	
	private $apiParas = array();
	
	public function setActionType($actionType)
	{
		$this->actionType = $actionType;
		$this->apiParas["action_type"] = $actionType;
	}

	public function getActionType()
	{
		return $this->actionType;
	}

	public function setActivityId($activityId)
	{
		$this->activityId = $activityId;
		$this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId()
	{
		return $this->activityId;
	}

	public function setCmtId($cmtId)
	{
		$this->cmtId = $cmtId;
		$this->apiParas["cmt_id"] = $cmtId;
	}

	public function getCmtId()
	{
		return $this->cmtId;
	}

	public function setIsCancel($isCancel)
	{
		$this->isCancel = $isCancel;
		$this->apiParas["is_cancel"] = $isCancel;
	}

	public function getIsCancel()
	{
		return $this->isCancel;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.comments.action";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actionType,"actionType");
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkNotNull($this->cmtId,"cmtId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
