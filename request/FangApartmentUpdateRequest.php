<?php
/**
 * TOP API: taobao.fang.apartment.update request
 * 
 * @author auto create
 * @since 1.0, 2013-08-12 00:00:00
 */
class FangApartmentUpdateRequest
{
	/** 
	 * 户型建筑面积
	 **/
	private $apartmentBuildingSize;
	
	/** 
	 * 户型的室内面积
	 **/
	private $apartmentHouseSize;
	
	/** 
	 * 所有更新的户型在淘宝的户型ID
	 **/
	private $apartmentId;
	
	/** 
	 * 户型简介
	 **/
	private $apartmentIntroduction;
	
	/** 
	 * 户型名称
	 **/
	private $apartmentName;
	
	/** 
	 * 户型图
	 **/
	private $apartmentPics;
	
	/** 
	 * 户型图的标题
	 **/
	private $apartmentPicsTitle;
	
	/** 
	 * 户型卫生间个数
	 **/
	private $bathroomNum;
	
	/** 
	 * 楼盘ID
	 **/
	private $buildingId;
	
	/** 
	 * 户型厅数
	 **/
	private $hallNum;
	
	/** 
	 * 是否是主力户型
	 **/
	private $isMainApartment;
	
	/** 
	 * 户型室数
	 **/
	private $roomNum;
	
	private $apiParas = array();
	
	public function setApartmentBuildingSize($apartmentBuildingSize)
	{
		$this->apartmentBuildingSize = $apartmentBuildingSize;
		$this->apiParas["apartment_building_size"] = $apartmentBuildingSize;
	}

	public function getApartmentBuildingSize()
	{
		return $this->apartmentBuildingSize;
	}

	public function setApartmentHouseSize($apartmentHouseSize)
	{
		$this->apartmentHouseSize = $apartmentHouseSize;
		$this->apiParas["apartment_house_size"] = $apartmentHouseSize;
	}

	public function getApartmentHouseSize()
	{
		return $this->apartmentHouseSize;
	}

	public function setApartmentId($apartmentId)
	{
		$this->apartmentId = $apartmentId;
		$this->apiParas["apartment_id"] = $apartmentId;
	}

	public function getApartmentId()
	{
		return $this->apartmentId;
	}

	public function setApartmentIntroduction($apartmentIntroduction)
	{
		$this->apartmentIntroduction = $apartmentIntroduction;
		$this->apiParas["apartment_introduction"] = $apartmentIntroduction;
	}

	public function getApartmentIntroduction()
	{
		return $this->apartmentIntroduction;
	}

	public function setApartmentName($apartmentName)
	{
		$this->apartmentName = $apartmentName;
		$this->apiParas["apartment_name"] = $apartmentName;
	}

	public function getApartmentName()
	{
		return $this->apartmentName;
	}

	public function setApartmentPics($apartmentPics)
	{
		$this->apartmentPics = $apartmentPics;
		$this->apiParas["apartment_pics"] = $apartmentPics;
	}

	public function getApartmentPics()
	{
		return $this->apartmentPics;
	}

	public function setApartmentPicsTitle($apartmentPicsTitle)
	{
		$this->apartmentPicsTitle = $apartmentPicsTitle;
		$this->apiParas["apartment_pics_title"] = $apartmentPicsTitle;
	}

	public function getApartmentPicsTitle()
	{
		return $this->apartmentPicsTitle;
	}

	public function setBathroomNum($bathroomNum)
	{
		$this->bathroomNum = $bathroomNum;
		$this->apiParas["bathroom_num"] = $bathroomNum;
	}

	public function getBathroomNum()
	{
		return $this->bathroomNum;
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

	public function setHallNum($hallNum)
	{
		$this->hallNum = $hallNum;
		$this->apiParas["hall_num"] = $hallNum;
	}

	public function getHallNum()
	{
		return $this->hallNum;
	}

	public function setIsMainApartment($isMainApartment)
	{
		$this->isMainApartment = $isMainApartment;
		$this->apiParas["is_main_apartment"] = $isMainApartment;
	}

	public function getIsMainApartment()
	{
		return $this->isMainApartment;
	}

	public function setRoomNum($roomNum)
	{
		$this->roomNum = $roomNum;
		$this->apiParas["room_num"] = $roomNum;
	}

	public function getRoomNum()
	{
		return $this->roomNum;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.apartment.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->apartmentId,"apartmentId");
		RequestCheckUtil::checkNotNull($this->apartmentName,"apartmentName");
		RequestCheckUtil::checkNotNull($this->apartmentPics,"apartmentPics");
		RequestCheckUtil::checkNotNull($this->apartmentPicsTitle,"apartmentPicsTitle");
		RequestCheckUtil::checkNotNull($this->bathroomNum,"bathroomNum");
		RequestCheckUtil::checkNotNull($this->buildingId,"buildingId");
		RequestCheckUtil::checkNotNull($this->hallNum,"hallNum");
		RequestCheckUtil::checkNotNull($this->isMainApartment,"isMainApartment");
		RequestCheckUtil::checkNotNull($this->roomNum,"roomNum");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
