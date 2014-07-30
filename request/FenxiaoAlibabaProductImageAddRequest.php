<?php
/**
 * TOP API: taobao.fenxiao.alibaba.product.image.add request
 * 
 * @author auto create
 * @since 1.0, 2010-12-07 00:00:00
 */
class FenxiaoAlibabaProductImageAddRequest
{
	/** 
	 * 图片
	 **/
	private $image;
	
	/** 
	 * 产品ID
	 **/
	private $productId;
	
	/** 
	 * 在分销平台上的供应商ID
	 **/
	private $supplierId;
	
	private $apiParas = array();
	
	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setSupplierId($supplierId)
	{
		$this->supplierId = $supplierId;
		$this->apiParas["supplier_id"] = $supplierId;
	}

	public function getSupplierId()
	{
		return $this->supplierId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.alibaba.product.image.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->image,"image");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkNotNull($this->supplierId,"supplierId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
