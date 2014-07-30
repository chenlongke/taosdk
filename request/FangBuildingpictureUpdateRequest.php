<?php
/**
 * TOP API: taobao.fang.buildingpicture.update request
 * 
 * @author auto create
 * @since 1.0, 2013-08-12 00:00:00
 */
class FangBuildingpictureUpdateRequest
{
	/** 
	 * 楼盘ID
	 **/
	private $buildingId;
	
	/** 
	 * 图片地址列表
	 **/
	private $picList;
	
	/** 
	 * 图片标题列表
	 **/
	private $picTitleList;
	
	/** 
	 * 图片类型
	 **/
	private $picType;
	
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

	public function setPicList($picList)
	{
		$this->picList = $picList;
		$this->apiParas["pic_list"] = $picList;
	}

	public function getPicList()
	{
		return $this->picList;
	}

	public function setPicTitleList($picTitleList)
	{
		$this->picTitleList = $picTitleList;
		$this->apiParas["pic_title_list"] = $picTitleList;
	}

	public function getPicTitleList()
	{
		return $this->picTitleList;
	}

	public function setPicType($picType)
	{
		$this->picType = $picType;
		$this->apiParas["pic_type"] = $picType;
	}

	public function getPicType()
	{
		return $this->picType;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.buildingpicture.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buildingId,"buildingId");
		RequestCheckUtil::checkNotNull($this->picList,"picList");
		RequestCheckUtil::checkNotNull($this->picTitleList,"picTitleList");
		RequestCheckUtil::checkNotNull($this->picType,"picType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
