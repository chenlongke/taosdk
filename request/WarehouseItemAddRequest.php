<?php
/**
 * TOP API: taobao.warehouse.item.add request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseItemAddRequest
{
	/** 
	 * 此字段已作废。条形码/货号。最大长度为64个字符，一个汉字算两个字符
	 **/
	private $barCode;
	
	/** 
	 * 商品名称。最大长度为256字符，一个汉字算两个字符
	 **/
	private $itemName;
	
	/** 
	 * 自定义属性。最大长度为256字符，一个汉字算两个字符
	 **/
	private $memo;
	
	/** 
	 * 商家编码。商家编码唯一，最大长度为64个字符
	 **/
	private $outerId;
	
	private $apiParas = array();
	
	public function setBarCode($barCode)
	{
		$this->barCode = $barCode;
		$this->apiParas["bar_code"] = $barCode;
	}

	public function getBarCode()
	{
		return $this->barCode;
	}

	public function setItemName($itemName)
	{
		$this->itemName = $itemName;
		$this->apiParas["item_name"] = $itemName;
	}

	public function getItemName()
	{
		return $this->itemName;
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.item.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->barCode,64,"barCode");
		RequestCheckUtil::checkNotNull($this->itemName,"itemName");
		RequestCheckUtil::checkMaxLength($this->itemName,256,"itemName");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkMaxLength($this->outerId,64,"outerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
