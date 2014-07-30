<?php
/**
 * TOP API: taobao.elink.inventory.preserve request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkInventoryPreserveRequest
{
	/** 
	 * 物料编码
	 **/
	private $materialsId;
	
	/** 
	 * 实际库存
	 **/
	private $sellCount;
	
	/** 
	 * 共享库存
	 **/
	private $shareCount;
	
	/** 
	 * 仓库唯一标识
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setMaterialsId($materialsId)
	{
		$this->materialsId = $materialsId;
		$this->apiParas["materials_id"] = $materialsId;
	}

	public function getMaterialsId()
	{
		return $this->materialsId;
	}

	public function setSellCount($sellCount)
	{
		$this->sellCount = $sellCount;
		$this->apiParas["sell_count"] = $sellCount;
	}

	public function getSellCount()
	{
		return $this->sellCount;
	}

	public function setShareCount($shareCount)
	{
		$this->shareCount = $shareCount;
		$this->apiParas["share_count"] = $shareCount;
	}

	public function getShareCount()
	{
		return $this->shareCount;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.inventory.preserve";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->materialsId,"materialsId");
		RequestCheckUtil::checkNotNull($this->sellCount,"sellCount");
		RequestCheckUtil::checkNotNull($this->shareCount,"shareCount");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
