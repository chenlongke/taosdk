<?php
/**
 * TOP API: taobao.product.barcode.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-21 00:00:00
 */
class ProductBarcodeGetRequest
{
	/** 
	 * 产品条形码barcode的字符串
	 **/
	private $barcode;
	
	private $apiParas = array();
	
	public function setBarcode($barcode)
	{
		$this->barcode = $barcode;
		$this->apiParas["barcode"] = $barcode;
	}

	public function getBarcode()
	{
		return $this->barcode;
	}

	public function getApiMethodName()
	{
		return "taobao.product.barcode.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->barcode,"barcode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
