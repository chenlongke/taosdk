<?php
/**
 * TOP API: taobao.lifeplace.coupon.get request
 * 
 * @author auto create
 * @since 1.0, 2013-09-10 00:00:00
 */
class LifeplaceCouponGetRequest
{
	/** 
	 * 类目id,支持多个,以逗号分隔
	 **/
	private $cats;
	
	/** 
	 * 城市ID
	 **/
	private $city;
	
	/** 
	 * 中心点到周边的距离，单位：米
	 **/
	private $dis;
	
	/** 
	 * 页码
	 **/
	private $pn;
	
	/** 
	 * 位置坐标(经度)
	 **/
	private $posx;
	
	/** 
	 * 位置坐标(纬度)
	 **/
	private $posy;
	
	/** 
	 * 每页结果数,默认30条，最大支持100
	 **/
	private $ps;
	
	/** 
	 * 搜索关键字
	 **/
	private $q;
	
	/** 
	 * 排序类型：sort="date":最新发布, sort="sale":销量最多, sort="price":价格最高, sort="_price":价格最低, 默认按距离近到远排序
	 **/
	private $sort;
	
	private $apiParas = array();
	
	public function setCats($cats)
	{
		$this->cats = $cats;
		$this->apiParas["cats"] = $cats;
	}

	public function getCats()
	{
		return $this->cats;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setDis($dis)
	{
		$this->dis = $dis;
		$this->apiParas["dis"] = $dis;
	}

	public function getDis()
	{
		return $this->dis;
	}

	public function setPn($pn)
	{
		$this->pn = $pn;
		$this->apiParas["pn"] = $pn;
	}

	public function getPn()
	{
		return $this->pn;
	}

	public function setPosx($posx)
	{
		$this->posx = $posx;
		$this->apiParas["posx"] = $posx;
	}

	public function getPosx()
	{
		return $this->posx;
	}

	public function setPosy($posy)
	{
		$this->posy = $posy;
		$this->apiParas["posy"] = $posy;
	}

	public function getPosy()
	{
		return $this->posy;
	}

	public function setPs($ps)
	{
		$this->ps = $ps;
		$this->apiParas["ps"] = $ps;
	}

	public function getPs()
	{
		return $this->ps;
	}

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function getApiMethodName()
	{
		return "taobao.lifeplace.coupon.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->dis,10000,"dis");
		RequestCheckUtil::checkMinValue($this->dis,0,"dis");
		RequestCheckUtil::checkNotNull($this->posx,"posx");
		RequestCheckUtil::checkMaxValue($this->posx,18000000,"posx");
		RequestCheckUtil::checkMinValue($this->posx,0,"posx");
		RequestCheckUtil::checkNotNull($this->posy,"posy");
		RequestCheckUtil::checkMaxValue($this->posy,9000000,"posy");
		RequestCheckUtil::checkMinValue($this->posy,0,"posy");
		RequestCheckUtil::checkMaxValue($this->ps,100,"ps");
		RequestCheckUtil::checkMinValue($this->ps,30,"ps");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
