<?php
/**
 * TOP API: taobao.fang.score.publish request
 * 
 * @author auto create
 * @since 1.0, 2013-08-12 00:00:00
 */
class FangScorePublishRequest
{
	/** 
	 * 配套状况参与评分人数
	 **/
	private $accompanyCount;
	
	/** 
	 * 配套总评分
	 **/
	private $accompanyScore;
	
	/** 
	 * 淘宝楼盘ID
	 **/
	private $buildingId;
	
	/** 
	 * 开发商参与评分人数
	 **/
	private $developerCount;
	
	/** 
	 * 开发商总评分
	 **/
	private $developerScore;
	
	/** 
	 * 环境状况参与评分的人数
	 **/
	private $envCount;
	
	/** 
	 * 环境状况总评分
	 **/
	private $envScore;
	
	/** 
	 * 规划状况参与评分的人数
	 **/
	private $planCount;
	
	/** 
	 * 规划总评分
	 **/
	private $planScore;
	
	/** 
	 * 交通状况参与评分的人数
	 **/
	private $trafficCount;
	
	/** 
	 * 交通状况总评分
	 **/
	private $trafficScore;
	
	private $apiParas = array();
	
	public function setAccompanyCount($accompanyCount)
	{
		$this->accompanyCount = $accompanyCount;
		$this->apiParas["accompany_count"] = $accompanyCount;
	}

	public function getAccompanyCount()
	{
		return $this->accompanyCount;
	}

	public function setAccompanyScore($accompanyScore)
	{
		$this->accompanyScore = $accompanyScore;
		$this->apiParas["accompany_score"] = $accompanyScore;
	}

	public function getAccompanyScore()
	{
		return $this->accompanyScore;
	}

	public function setBuildingId($buildingId)
	{
		$this->buildingId = $buildingId;
		$this->apiParas["building_id"] = $buildingId;
	}

	public function getBuildingId()
	{
		return $this->buildingId;
	}

	public function setDeveloperCount($developerCount)
	{
		$this->developerCount = $developerCount;
		$this->apiParas["developer_count"] = $developerCount;
	}

	public function getDeveloperCount()
	{
		return $this->developerCount;
	}

	public function setDeveloperScore($developerScore)
	{
		$this->developerScore = $developerScore;
		$this->apiParas["developer_score"] = $developerScore;
	}

	public function getDeveloperScore()
	{
		return $this->developerScore;
	}

	public function setEnvCount($envCount)
	{
		$this->envCount = $envCount;
		$this->apiParas["env_count"] = $envCount;
	}

	public function getEnvCount()
	{
		return $this->envCount;
	}

	public function setEnvScore($envScore)
	{
		$this->envScore = $envScore;
		$this->apiParas["env_score"] = $envScore;
	}

	public function getEnvScore()
	{
		return $this->envScore;
	}

	public function setPlanCount($planCount)
	{
		$this->planCount = $planCount;
		$this->apiParas["plan_count"] = $planCount;
	}

	public function getPlanCount()
	{
		return $this->planCount;
	}

	public function setPlanScore($planScore)
	{
		$this->planScore = $planScore;
		$this->apiParas["plan_score"] = $planScore;
	}

	public function getPlanScore()
	{
		return $this->planScore;
	}

	public function setTrafficCount($trafficCount)
	{
		$this->trafficCount = $trafficCount;
		$this->apiParas["traffic_count"] = $trafficCount;
	}

	public function getTrafficCount()
	{
		return $this->trafficCount;
	}

	public function setTrafficScore($trafficScore)
	{
		$this->trafficScore = $trafficScore;
		$this->apiParas["traffic_score"] = $trafficScore;
	}

	public function getTrafficScore()
	{
		return $this->trafficScore;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.score.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accompanyCount,"accompanyCount");
		RequestCheckUtil::checkNotNull($this->accompanyScore,"accompanyScore");
		RequestCheckUtil::checkNotNull($this->buildingId,"buildingId");
		RequestCheckUtil::checkNotNull($this->developerCount,"developerCount");
		RequestCheckUtil::checkNotNull($this->developerScore,"developerScore");
		RequestCheckUtil::checkNotNull($this->envCount,"envCount");
		RequestCheckUtil::checkNotNull($this->envScore,"envScore");
		RequestCheckUtil::checkNotNull($this->planCount,"planCount");
		RequestCheckUtil::checkNotNull($this->planScore,"planScore");
		RequestCheckUtil::checkNotNull($this->trafficCount,"trafficCount");
		RequestCheckUtil::checkNotNull($this->trafficScore,"trafficScore");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
