<?php
/**
 * TOP API: taobao.xhotel.rooms.increment request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class XhotelRoomsIncrementRequest
{
	/** 
	 * 多商品房态信息,一次最多修改10个商品的库存。json encode。示例：[{"gid":1,"roomQuota":[{"date":2010-01-28,"quota":10},{"date":2010-01-29,"quota":10}]},
{"gid":2,"roomQuota":[{"date":2010-01-28,"quota":20},{"date":2010-01-29,"quota":20}]}]
	 **/
	private $roomQuotaMap;
	
	private $apiParas = array();
	
	public function setRoomQuotaMap($roomQuotaMap)
	{
		$this->roomQuotaMap = $roomQuotaMap;
		$this->apiParas["room_quota_map"] = $roomQuotaMap;
	}

	public function getRoomQuotaMap()
	{
		return $this->roomQuotaMap;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.rooms.increment";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->roomQuotaMap,"roomQuotaMap");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
