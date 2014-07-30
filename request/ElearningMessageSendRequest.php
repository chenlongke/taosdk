<?php
/**
 * TOP API: taobao.elearning.message.send request
 * 
 * @author auto create
 * @since 1.0, 2012-06-14 00:00:00
 */
class ElearningMessageSendRequest
{
	/** 
	 * 淘宝课程id
	 **/
	private $courseId;
	
	/** 
	 * msg_type=1为讲师，机构类信息
msg_type=2为学员类信息
	 **/
	private $msgType;
	
	/** 
	 * 学员淘宝id，每个id中间用半角逗号隔开，不可超过10个id
	 **/
	private $userIds;
	
	private $apiParas = array();
	
	public function setCourseId($courseId)
	{
		$this->courseId = $courseId;
		$this->apiParas["course_id"] = $courseId;
	}

	public function getCourseId()
	{
		return $this->courseId;
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

	public function setUserIds($userIds)
	{
		$this->userIds = $userIds;
		$this->apiParas["user_ids"] = $userIds;
	}

	public function getUserIds()
	{
		return $this->userIds;
	}

	public function getApiMethodName()
	{
		return "taobao.elearning.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->courseId,"courseId");
		RequestCheckUtil::checkNotNull($this->msgType,"msgType");
		RequestCheckUtil::checkNotNull($this->userIds,"userIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
