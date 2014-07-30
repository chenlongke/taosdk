<?php
/**
 * TOP API: taobao.fang.impress.publish request
 * 
 * @author auto create
 * @since 1.0, 2013-08-12 00:00:00
 */
class FangImpressPublishRequest
{
	/** 
	 * 楼盘ID
	 **/
	private $buildingId;
	
	/** 
	 * 印象
	 **/
	private $impressName;
	
	/** 
	 * 印象参与的人数
	 **/
	private $impressNum;
	
	/** 
	 * 外部楼盘印象ID
	 **/
	private $outerImpId;
	
	/** 
	 * 印象状态是否有效（1代表有效 0无效）
	 **/
	private $status;
	
	/** 
	 * 印象的版本
	 **/
	private $version;
	
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

	public function setImpressName($impressName)
	{
		$this->impressName = $impressName;
		$this->apiParas["impress_name"] = $impressName;
	}

	public function getImpressName()
	{
		return $this->impressName;
	}

	public function setImpressNum($impressNum)
	{
		$this->impressNum = $impressNum;
		$this->apiParas["impress_num"] = $impressNum;
	}

	public function getImpressNum()
	{
		return $this->impressNum;
	}

	public function setOuterImpId($outerImpId)
	{
		$this->outerImpId = $outerImpId;
		$this->apiParas["outer_imp_id"] = $outerImpId;
	}

	public function getOuterImpId()
	{
		return $this->outerImpId;
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

	public function setVersion($version)
	{
		$this->version = $version;
		$this->apiParas["version"] = $version;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.impress.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buildingId,"buildingId");
		RequestCheckUtil::checkNotNull($this->impressName,"impressName");
		RequestCheckUtil::checkNotNull($this->impressNum,"impressNum");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
