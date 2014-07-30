<?php
/**
 * TOP API: taobao.elink.item.add request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkItemAddRequest
{
	/** 
	 * 授权品牌ID
	 **/
	private $brandPid;
	
	/** 
	 * 授权类目ID
	 **/
	private $cid;
	
	/** 
	 * 商品描述
	 **/
	private $desc;
	
	/** 
	 * 货号型号
	 **/
	private $inputModel;
	
	/** 
	 * 用户自定义输入属性,属性如：颜色分类通过taobao.elink.props.get获取，属性值例如“白色”由用户定义,多个属性串用分号隔开。 格式如: 颜色分类:白色;尺码:41
	 **/
	private $inputStr;
	
	/** 
	 * 上市时间
	 **/
	private $listTime;
	
	/** 
	 * 物料编码
	 **/
	private $materialsId;
	
	/** 
	 * 备注
	 **/
	private $memo;
	
	/** 
	 * 供货商品价格
	 **/
	private $price;
	
	/** 
	 * 零售价上限
	 **/
	private $priceMax;
	
	/** 
	 * 零售价下限
	 **/
	private $priceMin;
	
	/** 
	 * 属性图片
	 **/
	private $propImage;
	
	/** 
	 * 商品供货状态：正常（normal），禁止（ban）。
不传默认：normal
	 **/
	private $status;
	
	/** 
	 * 供货时间
	 **/
	private $supplyTime;
	
	/** 
	 * 商品标题
	 **/
	private $title;
	
	/** 
	 * 警戒值
	 **/
	private $warningValue;
	
	private $apiParas = array();
	
	public function setBrandPid($brandPid)
	{
		$this->brandPid = $brandPid;
		$this->apiParas["brand_pid"] = $brandPid;
	}

	public function getBrandPid()
	{
		return $this->brandPid;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setInputModel($inputModel)
	{
		$this->inputModel = $inputModel;
		$this->apiParas["input_model"] = $inputModel;
	}

	public function getInputModel()
	{
		return $this->inputModel;
	}

	public function setInputStr($inputStr)
	{
		$this->inputStr = $inputStr;
		$this->apiParas["input_str"] = $inputStr;
	}

	public function getInputStr()
	{
		return $this->inputStr;
	}

	public function setListTime($listTime)
	{
		$this->listTime = $listTime;
		$this->apiParas["list_time"] = $listTime;
	}

	public function getListTime()
	{
		return $this->listTime;
	}

	public function setMaterialsId($materialsId)
	{
		$this->materialsId = $materialsId;
		$this->apiParas["materials_id"] = $materialsId;
	}

	public function getMaterialsId()
	{
		return $this->materialsId;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPriceMax($priceMax)
	{
		$this->priceMax = $priceMax;
		$this->apiParas["price_max"] = $priceMax;
	}

	public function getPriceMax()
	{
		return $this->priceMax;
	}

	public function setPriceMin($priceMin)
	{
		$this->priceMin = $priceMin;
		$this->apiParas["price_min"] = $priceMin;
	}

	public function getPriceMin()
	{
		return $this->priceMin;
	}

	public function setPropImage($propImage)
	{
		$this->propImage = $propImage;
		$this->apiParas["prop_image"] = $propImage;
	}

	public function getPropImage()
	{
		return $this->propImage;
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

	public function setSupplyTime($supplyTime)
	{
		$this->supplyTime = $supplyTime;
		$this->apiParas["supply_time"] = $supplyTime;
	}

	public function getSupplyTime()
	{
		return $this->supplyTime;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setWarningValue($warningValue)
	{
		$this->warningValue = $warningValue;
		$this->apiParas["warning_value"] = $warningValue;
	}

	public function getWarningValue()
	{
		return $this->warningValue;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.item.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->brandPid,"brandPid");
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkNotNull($this->inputModel,"inputModel");
		RequestCheckUtil::checkNotNull($this->inputStr,"inputStr");
		RequestCheckUtil::checkNotNull($this->listTime,"listTime");
		RequestCheckUtil::checkNotNull($this->materialsId,"materialsId");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkNotNull($this->priceMax,"priceMax");
		RequestCheckUtil::checkNotNull($this->priceMin,"priceMin");
		RequestCheckUtil::checkNotNull($this->supplyTime,"supplyTime");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
