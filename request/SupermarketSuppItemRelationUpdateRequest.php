<?php
/**
 * TOP API: taobao.supermarket.supp.item.relation.update request
 * 
 * @author auto create
 * @since 1.0, 2014-01-14 00:00:00
 */
class SupermarketSuppItemRelationUpdateRequest
{
	/** 
	 * 商品ids
	 **/
	private $itemidList;
	
	/** 
	 * 外部商家编码
	 **/
	private $outerSuppCode;
	
	/** 
	 * 商家nick
	 **/
	private $suppNick;
	
	/** 
	 * 负责该商品的小二花名
	 **/
	private $tbOperaNick;
	
	/** 
	 * 操作类型1：增加关系 2：删除原有关系  3：表示更新
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setItemidList($itemidList)
	{
		$this->itemidList = $itemidList;
		$this->apiParas["itemid_list"] = $itemidList;
	}

	public function getItemidList()
	{
		return $this->itemidList;
	}

	public function setOuterSuppCode($outerSuppCode)
	{
		$this->outerSuppCode = $outerSuppCode;
		$this->apiParas["outer_supp_code"] = $outerSuppCode;
	}

	public function getOuterSuppCode()
	{
		return $this->outerSuppCode;
	}

	public function setSuppNick($suppNick)
	{
		$this->suppNick = $suppNick;
		$this->apiParas["supp_nick"] = $suppNick;
	}

	public function getSuppNick()
	{
		return $this->suppNick;
	}

	public function setTbOperaNick($tbOperaNick)
	{
		$this->tbOperaNick = $tbOperaNick;
		$this->apiParas["tb_opera_nick"] = $tbOperaNick;
	}

	public function getTbOperaNick()
	{
		return $this->tbOperaNick;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.supermarket.supp.item.relation.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemidList,"itemidList");
		RequestCheckUtil::checkMaxListSize($this->itemidList,50,"itemidList");
		RequestCheckUtil::checkNotNull($this->outerSuppCode,"outerSuppCode");
		RequestCheckUtil::checkNotNull($this->suppNick,"suppNick");
		RequestCheckUtil::checkMaxLength($this->suppNick,128,"suppNick");
		RequestCheckUtil::checkNotNull($this->tbOperaNick,"tbOperaNick");
		RequestCheckUtil::checkMaxLength($this->tbOperaNick,128,"tbOperaNick");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkMaxLength($this->type,3,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
