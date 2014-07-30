<?php
/**
 * TOP API: taobao.game.official.add request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class GameOfficialAddRequest
{
	/** 
	 * 叶子类目id(游戏ID)
	 **/
	private $cid;
	
	/** 
	 * 宝贝描述。字数要大于5个字符，小于25000个字符，受违禁词控制
	 **/
	private $desc;
	
	/** 
	 * 商品数量，小于等于10
	 **/
	private $num;
	
	/** 
	 * 合作方宝贝id
	 **/
	private $partnerGameId;
	
	/** 
	 * 每份游戏币数量，允许小数点后两位
	 **/
	private $perQuantity;
	
	/** 
	 * 商品价格。取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。需要在正确的价格区间内。
	 **/
	private $price;
	
	/** 
	 * 属性:属性值。包括区服属性及网游垂直属性,但传递的属性ID需要加前缀标识是一般属性还是垂直属性。即：一般属性前面加cp_；担保垂直属性前面加db_cp_；寄售垂直属性前面加js_cp_；垂直属性密码开头加上pwd_；二次密码加上pwd2_。而垂直属性密码又分担保和寄售，因此完整的头部应该为db_cp_pwd_
	 **/
	private $props;
	
	/** 
	 * 宝贝标题，仅需传递卖家发布选择的标题后缀，例如：官方交易。
	 **/
	private $title;
	
	/** 
	 * 游戏币单位
	 **/
	private $unit;
	
	/** 
	 * 有效期。可选值:7,14;单位:天;默认值:7
	 **/
	private $validThru;
	
	private $apiParas = array();
	
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

	public function setNum($num)
	{
		$this->num = $num;
		$this->apiParas["num"] = $num;
	}

	public function getNum()
	{
		return $this->num;
	}

	public function setPartnerGameId($partnerGameId)
	{
		$this->partnerGameId = $partnerGameId;
		$this->apiParas["partner_game_id"] = $partnerGameId;
	}

	public function getPartnerGameId()
	{
		return $this->partnerGameId;
	}

	public function setPerQuantity($perQuantity)
	{
		$this->perQuantity = $perQuantity;
		$this->apiParas["per_quantity"] = $perQuantity;
	}

	public function getPerQuantity()
	{
		return $this->perQuantity;
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

	public function setProps($props)
	{
		$this->props = $props;
		$this->apiParas["props"] = $props;
	}

	public function getProps()
	{
		return $this->props;
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

	public function setUnit($unit)
	{
		$this->unit = $unit;
		$this->apiParas["unit"] = $unit;
	}

	public function getUnit()
	{
		return $this->unit;
	}

	public function setValidThru($validThru)
	{
		$this->validThru = $validThru;
		$this->apiParas["valid_thru"] = $validThru;
	}

	public function getValidThru()
	{
		return $this->validThru;
	}

	public function getApiMethodName()
	{
		return "taobao.game.official.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkNotNull($this->num,"num");
		RequestCheckUtil::checkNotNull($this->partnerGameId,"partnerGameId");
		RequestCheckUtil::checkNotNull($this->perQuantity,"perQuantity");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkNotNull($this->props,"props");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
