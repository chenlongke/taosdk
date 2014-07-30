<?php
/**
 * TOP API: taobao.fang.community.update request
 * 
 * @author auto create
 * @since 1.0, 2014-01-02 00:00:00
 */
class FangCommunityUpdateRequest
{
	/** 
	 * 楼盘地址
	 **/
	private $buildingAddress;
	
	/** 
	 * 建筑设计公司
	 **/
	private $buildingDesignCompany;
	
	/** 
	 * 楼盘特色
	 **/
	private $buildingFlavour;
	
	/** 
	 * 小区ID
	 **/
	private $buildingId;
	
	/** 
	 * 小区简介
	 **/
	private $buildingIntroduction;
	
	/** 
	 * 楼盘纬度
	 **/
	private $buildingPosx;
	
	/** 
	 * 楼盘经度
	 **/
	private $buildingPosy;
	
	/** 
	 * 建筑风格
	 **/
	private $buildingStyle;
	
	/** 
	 * 交付时间
	 **/
	private $deliveryTime;
	
	/** 
	 * 竣工时间
	 **/
	private $endTime;
	
	/** 
	 * 层高
	 **/
	private $floorHeight;
	
	/** 
	 * 绿化率
	 **/
	private $greenRate;
	
	/** 
	 * 景观设计公司
	 **/
	private $landscapeCompany;
	
	/** 
	 * 主力户型
	 **/
	private $mainApartments;
	
	/** 
	 * 楼盘规划配套
	 **/
	private $municipalPlanning;
	
	/** 
	 * 外部小区ID
	 **/
	private $outerBuildingId;
	
	/** 
	 * 车位租用费
	 **/
	private $parkingFee;
	
	/** 
	 * 小区车位售价
	 **/
	private $parkingPrice;
	
	/** 
	 * 车位比
	 **/
	private $parkingRate;
	
	/** 
	 * 楼盘物业公司
	 **/
	private $propertyCompany;
	
	/** 
	 * 物业费
	 **/
	private $propertyFee;
	
	/** 
	 * 产权年限
	 **/
	private $rightLimit;
	
	/** 
	 * 总建筑面积
	 **/
	private $totalBuildingSize;
	
	/** 
	 * 总占地面积
	 **/
	private $totalCoverSize;
	
	/** 
	 * 总户数
	 **/
	private $totalHouse;
	
	/** 
	 * 总车位数
	 **/
	private $totalParkingNum;
	
	/** 
	 * 楼盘总栋数
	 **/
	private $totalUnits;
	
	/** 
	 * 更新此条数据的用户旺旺昵称
	 **/
	private $userNick;
	
	/** 
	 * 楼盘容积率
	 **/
	private $volumeRate;
	
	private $apiParas = array();
	
	public function setBuildingAddress($buildingAddress)
	{
		$this->buildingAddress = $buildingAddress;
		$this->apiParas["building_address"] = $buildingAddress;
	}

	public function getBuildingAddress()
	{
		return $this->buildingAddress;
	}

	public function setBuildingDesignCompany($buildingDesignCompany)
	{
		$this->buildingDesignCompany = $buildingDesignCompany;
		$this->apiParas["building_design_company"] = $buildingDesignCompany;
	}

	public function getBuildingDesignCompany()
	{
		return $this->buildingDesignCompany;
	}

	public function setBuildingFlavour($buildingFlavour)
	{
		$this->buildingFlavour = $buildingFlavour;
		$this->apiParas["building_flavour"] = $buildingFlavour;
	}

	public function getBuildingFlavour()
	{
		return $this->buildingFlavour;
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

	public function setBuildingIntroduction($buildingIntroduction)
	{
		$this->buildingIntroduction = $buildingIntroduction;
		$this->apiParas["building_introduction"] = $buildingIntroduction;
	}

	public function getBuildingIntroduction()
	{
		return $this->buildingIntroduction;
	}

	public function setBuildingPosx($buildingPosx)
	{
		$this->buildingPosx = $buildingPosx;
		$this->apiParas["building_posx"] = $buildingPosx;
	}

	public function getBuildingPosx()
	{
		return $this->buildingPosx;
	}

	public function setBuildingPosy($buildingPosy)
	{
		$this->buildingPosy = $buildingPosy;
		$this->apiParas["building_posy"] = $buildingPosy;
	}

	public function getBuildingPosy()
	{
		return $this->buildingPosy;
	}

	public function setBuildingStyle($buildingStyle)
	{
		$this->buildingStyle = $buildingStyle;
		$this->apiParas["building_style"] = $buildingStyle;
	}

	public function getBuildingStyle()
	{
		return $this->buildingStyle;
	}

	public function setDeliveryTime($deliveryTime)
	{
		$this->deliveryTime = $deliveryTime;
		$this->apiParas["delivery_time"] = $deliveryTime;
	}

	public function getDeliveryTime()
	{
		return $this->deliveryTime;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFloorHeight($floorHeight)
	{
		$this->floorHeight = $floorHeight;
		$this->apiParas["floor_height"] = $floorHeight;
	}

	public function getFloorHeight()
	{
		return $this->floorHeight;
	}

	public function setGreenRate($greenRate)
	{
		$this->greenRate = $greenRate;
		$this->apiParas["green_rate"] = $greenRate;
	}

	public function getGreenRate()
	{
		return $this->greenRate;
	}

	public function setLandscapeCompany($landscapeCompany)
	{
		$this->landscapeCompany = $landscapeCompany;
		$this->apiParas["landscape_company"] = $landscapeCompany;
	}

	public function getLandscapeCompany()
	{
		return $this->landscapeCompany;
	}

	public function setMainApartments($mainApartments)
	{
		$this->mainApartments = $mainApartments;
		$this->apiParas["main_apartments"] = $mainApartments;
	}

	public function getMainApartments()
	{
		return $this->mainApartments;
	}

	public function setMunicipalPlanning($municipalPlanning)
	{
		$this->municipalPlanning = $municipalPlanning;
		$this->apiParas["municipal_planning"] = $municipalPlanning;
	}

	public function getMunicipalPlanning()
	{
		return $this->municipalPlanning;
	}

	public function setOuterBuildingId($outerBuildingId)
	{
		$this->outerBuildingId = $outerBuildingId;
		$this->apiParas["outer_building_id"] = $outerBuildingId;
	}

	public function getOuterBuildingId()
	{
		return $this->outerBuildingId;
	}

	public function setParkingFee($parkingFee)
	{
		$this->parkingFee = $parkingFee;
		$this->apiParas["parking_fee"] = $parkingFee;
	}

	public function getParkingFee()
	{
		return $this->parkingFee;
	}

	public function setParkingPrice($parkingPrice)
	{
		$this->parkingPrice = $parkingPrice;
		$this->apiParas["parking_price"] = $parkingPrice;
	}

	public function getParkingPrice()
	{
		return $this->parkingPrice;
	}

	public function setParkingRate($parkingRate)
	{
		$this->parkingRate = $parkingRate;
		$this->apiParas["parking_rate"] = $parkingRate;
	}

	public function getParkingRate()
	{
		return $this->parkingRate;
	}

	public function setPropertyCompany($propertyCompany)
	{
		$this->propertyCompany = $propertyCompany;
		$this->apiParas["property_company"] = $propertyCompany;
	}

	public function getPropertyCompany()
	{
		return $this->propertyCompany;
	}

	public function setPropertyFee($propertyFee)
	{
		$this->propertyFee = $propertyFee;
		$this->apiParas["property_fee"] = $propertyFee;
	}

	public function getPropertyFee()
	{
		return $this->propertyFee;
	}

	public function setRightLimit($rightLimit)
	{
		$this->rightLimit = $rightLimit;
		$this->apiParas["right_limit"] = $rightLimit;
	}

	public function getRightLimit()
	{
		return $this->rightLimit;
	}

	public function setTotalBuildingSize($totalBuildingSize)
	{
		$this->totalBuildingSize = $totalBuildingSize;
		$this->apiParas["total_building_size"] = $totalBuildingSize;
	}

	public function getTotalBuildingSize()
	{
		return $this->totalBuildingSize;
	}

	public function setTotalCoverSize($totalCoverSize)
	{
		$this->totalCoverSize = $totalCoverSize;
		$this->apiParas["total_cover_size"] = $totalCoverSize;
	}

	public function getTotalCoverSize()
	{
		return $this->totalCoverSize;
	}

	public function setTotalHouse($totalHouse)
	{
		$this->totalHouse = $totalHouse;
		$this->apiParas["total_house"] = $totalHouse;
	}

	public function getTotalHouse()
	{
		return $this->totalHouse;
	}

	public function setTotalParkingNum($totalParkingNum)
	{
		$this->totalParkingNum = $totalParkingNum;
		$this->apiParas["total_parking_num"] = $totalParkingNum;
	}

	public function getTotalParkingNum()
	{
		return $this->totalParkingNum;
	}

	public function setTotalUnits($totalUnits)
	{
		$this->totalUnits = $totalUnits;
		$this->apiParas["total_units"] = $totalUnits;
	}

	public function getTotalUnits()
	{
		return $this->totalUnits;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function setVolumeRate($volumeRate)
	{
		$this->volumeRate = $volumeRate;
		$this->apiParas["volume_rate"] = $volumeRate;
	}

	public function getVolumeRate()
	{
		return $this->volumeRate;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.community.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buildingAddress,"buildingAddress");
		RequestCheckUtil::checkNotNull($this->buildingId,"buildingId");
		RequestCheckUtil::checkNotNull($this->buildingIntroduction,"buildingIntroduction");
		RequestCheckUtil::checkMaxLength($this->buildingIntroduction,1600,"buildingIntroduction");
		RequestCheckUtil::checkNotNull($this->buildingPosx,"buildingPosx");
		RequestCheckUtil::checkNotNull($this->buildingPosy,"buildingPosy");
		RequestCheckUtil::checkNotNull($this->rightLimit,"rightLimit");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
