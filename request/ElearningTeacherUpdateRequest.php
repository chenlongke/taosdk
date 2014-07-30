<?php
/**
 * TOP API: taobao.elearning.teacher.update request
 * 
 * @author auto create
 * @since 1.0, 2012-06-14 00:00:00
 */
class ElearningTeacherUpdateRequest
{
	/** 
	 * 讲师头像地址
	 **/
	private $avatar;
	
	/** 
	 * 讲师个人介绍
	 **/
	private $introduction;
	
	/** 
	 * 讲师个性签名
	 **/
	private $signature;
	
	/** 
	 * 讲师擅长领域
	 **/
	private $specialty;
	
	/** 
	 * 讲师真实姓名
	 **/
	private $userName;
	
	private $apiParas = array();
	
	public function setAvatar($avatar)
	{
		$this->avatar = $avatar;
		$this->apiParas["avatar"] = $avatar;
	}

	public function getAvatar()
	{
		return $this->avatar;
	}

	public function setIntroduction($introduction)
	{
		$this->introduction = $introduction;
		$this->apiParas["introduction"] = $introduction;
	}

	public function getIntroduction()
	{
		return $this->introduction;
	}

	public function setSignature($signature)
	{
		$this->signature = $signature;
		$this->apiParas["signature"] = $signature;
	}

	public function getSignature()
	{
		return $this->signature;
	}

	public function setSpecialty($specialty)
	{
		$this->specialty = $specialty;
		$this->apiParas["specialty"] = $specialty;
	}

	public function getSpecialty()
	{
		return $this->specialty;
	}

	public function setUserName($userName)
	{
		$this->userName = $userName;
		$this->apiParas["user_name"] = $userName;
	}

	public function getUserName()
	{
		return $this->userName;
	}

	public function getApiMethodName()
	{
		return "taobao.elearning.teacher.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
