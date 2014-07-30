<?php
/**
 * TOP API: taobao.fang.building.update request
 * 
 * @author auto create
 * @since 1.0, 2013-09-03 00:00:00
 */
class FangBuildingUpdateRequest
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
	 * 楼盘ID
	 **/
	private $buildingId;
	
	/** 
	 * 楼盘简介
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
	 * 建筑类型
	 **/
	private $buildingStyle;
	
	/** 
	 * 克尔瑞指导价格
	 **/
	private $cricPrice;
	
	/** 
	 * 克尔瑞指导
	 **/
	private $cricRecommend;
	
	/** 
	 * 装修情况
	 **/
	private $decorate;
	
	/** 
	 * 装修标准
	 **/
	private $decorateStandard;
	
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
	 * 开盘的建筑类型
	 **/
	private $openingBuildingStyle;
	
	/** 
	 * 开盘最低价格
	 **/
	private $openingHighPrice;
	
	/** 
	 * 开盘简介
	 **/
	private $openingIntroduction;
	
	/** 
	 * 开盘最低价格
	 **/
	private $openingLowPrice;
	
	/** 
	 * 付款方式
	 **/
	private $openingPayType;
	
	/** 
	 * -1为待定，其他为参考均价
	 **/
	private $openingRefPrice;
	
	/** 
	 * 开盘时间
	 **/
	private $openingTime;
	
	/** 
	 * 外部楼盘ID
	 **/
	private $outerBuildingId;
	
	/** 
	 * 车位费
	 **/
	private $parkingPrice;
	
	/** 
	 * 车位比
	 **/
	private $parkingRate;
	
	/** 
	 * 楼盘预售证号
	 **/
	private $presellId;
	
	/** 
	 * 目前进度
	 **/
	private $proceeding;
	
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
	 * 售楼地址
	 **/
	private $saleAddress;
	
	/** 
	 * 销售阶段
	 **/
	private $salePhase;
	
	/** 
	 * 售楼处电话
	 **/
	private $saleTel;
	
	/** 
	 * 开工时间
	 **/
	private $startTime;
	
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

	public function setCricPrice($cricPrice)
	{
		$this->cricPrice = $cricPrice;
		$this->apiParas["cric_price"] = $cricPrice;
	}

	public function getCricPrice()
	{
		return $this->cricPrice;
	}

	public function setCricRecommend($cricRecommend)
	{
		$this->cricRecommend = $cricRecommend;
		$this->apiParas["cric_recommend"] = $cricRecommend;
	}

	public function getCricRecommend()
	{
		return $this->cricRecommend;
	}

	public function setDecorate($decorate)
	{
		$this->decorate = $decorate;
		$this->apiParas["decorate"] = $decorate;
	}

	public function getDecorate()
	{
		return $this->decorate;
	}

	public function setDecorateStandard($decorateStandard)
	{
		$this->decorateStandard = $decorateStandard;
		$this->apiParas["decorate_standard"] = $decorateStandard;
	}

	public function getDecorateStandard()
	{
		return $this->decorateStandard;
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

	public function setOpeningBuildingStyle($openingBuildingStyle)
	{
		$this->openingBuildingStyle = $openingBuildingStyle;
		$this->apiParas["opening_building_style"] = $openingBuildingStyle;
	}

	public function getOpeningBuildingStyle()
	{
		return $this->openingBuildingStyle;
	}

	public function setOpeningHighPrice($openingHighPrice)
	{
		$this->openingHighPrice = $openingHighPrice;
		$this->apiParas["opening_high_price"] = $openingHighPrice;
	}

	public function getOpeningHighPrice()
	{
		return $this->openingHighPrice;
	}

	public function setOpeningIntroduction($openingIntroduction)
	{
		$this->openingIntroduction = $openingIntroduction;
		$this->apiParas["opening_introduction"] = $openingIntroduction;
	}

	public function getOpeningIntroduction()
	{
		return $this->openingIntroduction;
	}

	public function setOpeningLowPrice($openingLowPrice)
	{
		$this->openingLowPrice = $openingLowPrice;
		$this->apiParas["opening_low_price"] = $openingLowPrice;
	}

	public function getOpeningLowPrice()
	{
		return $this->openingLowPrice;
	}

	public function setOpeningPayType($openingPayType)
	{
		$this->openingPayType = $openingPayType;
		$this->apiParas["opening_pay_type"] = $openingPayType;
	}

	public function getOpeningPayType()
	{
		return $this->openingPayType;
	}

	public function setOpeningRefPrice($openingRefPrice)
	{
		$this->openingRefPrice = $openingRefPrice;
		$this->apiParas["opening_ref_price"] = $openingRefPrice;
	}

	public function getOpeningRefPrice()
	{
		return $this->openingRefPrice;
	}

	public function setOpeningTime($openingTime)
	{
		$this->openingTime = $openingTime;
		$this->apiParas["opening_time"] = $openingTime;
	}

	public function getOpeningTime()
	{
		return $this->openingTime;
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

	public function setPresellId($presellId)
	{
		$this->presellId = $presellId;
		$this->apiParas["presell_id"] = $presellId;
	}

	public function getPresellId()
	{
		return $this->presellId;
	}

	public function setProceeding($proceeding)
	{
		$this->proceeding = $proceeding;
		$this->apiParas["proceeding"] = $proceeding;
	}

	public function getProceeding()
	{
		return $this->proceeding;
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

	public function setSaleAddress($saleAddress)
	{
		$this->saleAddress = $saleAddress;
		$this->apiParas["sale_address"] = $saleAddress;
	}

	public function getSaleAddress()
	{
		return $this->saleAddress;
	}

	public function setSalePhase($salePhase)
	{
		$this->salePhase = $salePhase;
		$this->apiParas["sale_phase"] = $salePhase;
	}

	public function getSalePhase()
	{
		return $this->salePhase;
	}

	public function setSaleTel($saleTel)
	{
		$this->saleTel = $saleTel;
		$this->apiParas["sale_tel"] = $saleTel;
	}

	public function getSaleTel()
	{
		return $this->saleTel;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
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
		return "taobao.fang.building.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buildingAddress,"buildingAddress");
		RequestCheckUtil::checkNotNull($this->buildingId,"buildingId");
		RequestCheckUtil::checkNotNull($this->buildingPosx,"buildingPosx");
		RequestCheckUtil::checkNotNull($this->buildingPosy,"buildingPosy");
		RequestCheckUtil::checkNotNull($this->decorate,"decorate");
		RequestCheckUtil::checkNotNull($this->openingBuildingStyle,"openingBuildingStyle");
		RequestCheckUtil::checkNotNull($this->openingRefPrice,"openingRefPrice");
		RequestCheckUtil::checkNotNull($this->rightLimit,"rightLimit");
		RequestCheckUtil::checkNotNull($this->salePhase,"salePhase");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
