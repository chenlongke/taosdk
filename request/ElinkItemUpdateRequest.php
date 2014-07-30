<?php
/**
 * TOP API: taobao.elink.item.update request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkItemUpdateRequest
{
	/** 
	 * 商品描述
	 **/
	private $desc;
	
	/** 
	 * E链通商品ID
	 **/
	private $elinkid;
	
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
	 * 商品供货状态：正常（normal），禁止（ban），小二禁止（elinkban）;小二禁止不能修改
	 **/
	private $status;
	
	/** 
	 * 商品标题
	 **/
	private $title;
	
	/** 
	 * 警戒值
	 **/
	private $warningValue;
	
	private $apiParas = array();
	
	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setElinkid($elinkid)
	{
		$this->elinkid = $elinkid;
		$this->apiParas["elinkid"] = $elinkid;
	}

	public function getElinkid()
	{
		return $this->elinkid;
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
		return "taobao.elink.item.update";
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
