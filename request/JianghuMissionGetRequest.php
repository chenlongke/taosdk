<?php
/**
 * TOP API: taobao.jianghu.mission.get request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class JianghuMissionGetRequest
{
	/** 
	 * 任务id
	 **/
	private $missionId;
	
	private $apiParas = array();
	
	public function setMissionId($missionId)
	{
		$this->missionId = $missionId;
		$this->apiParas["mission_id"] = $missionId;
	}

	public function getMissionId()
	{
		return $this->missionId;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.mission.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->missionId,"missionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
