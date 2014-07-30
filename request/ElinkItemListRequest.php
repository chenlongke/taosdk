<?php
/**
 * TOP API: taobao.elink.item.list request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkItemListRequest
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
	 * E链通商品ID
	 **/
	private $elinkid;
	
	/** 
	 * 货号型号
	 **/
	private $inputModel;
	
	/** 
	 * 物料编码
	 **/
	private $materialsId;
	
	/** 
	 * 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数;最大值：100；默认值：40
	 **/
	private $pageSize;
	
	/** 
	 * 商品供货状态：正常（normal），禁止（ban），小二禁止（elinkban）;默认获取所有状态
	 **/
	private $status;
	
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

	public function setElinkid($elinkid)
	{
		$this->elinkid = $elinkid;
		$this->apiParas["elinkid"] = $elinkid;
	}

	public function getElinkid()
	{
		return $this->elinkid;
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

	public function setMaterialsId($materialsId)
	{
		$this->materialsId = $materialsId;
		$this->apiParas["materials_id"] = $materialsId;
	}

	public function getMaterialsId()
	{
		return $this->materialsId;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function getApiMethodName()
	{
		return "taobao.elink.item.list";
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
