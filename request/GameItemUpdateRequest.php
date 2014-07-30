<?php
/**
 * TOP API: taobao.game.item.update request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class GameItemUpdateRequest
{
	/** 
	 * 商品上传后的状态。可选值:ONSALE(出售中),INSTOCK(仓库中)。
	 **/
	private $approveStatus;
	
	/** 
	 * 叶子类目id(游戏ID)
	 **/
	private $cid;
	
	/** 
	 * 宝贝描述。字数要大于5个字符，小于25000个字符，受违禁词控制
	 **/
	private $desc;
	
	/** 
	 * 商品主图片。类型只能为gif,png,jpg,jpeg，大小不超过120K
	 **/
	private $image;
	
	/** 
	 * 是否参与无货赔付
	 **/
	private $isDeposit;
	
	/** 
	 * 商品数量，小于等于10，账号为1
	 **/
	private $num;
	
	/** 
	 * 宝贝数字ID
	 **/
	private $numIid;
	
	/** 
	 * 每份游戏币数量，允许小数点后两位
	 **/
	private $perQuantity;
	
	/** 
	 * 商品价格。取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。需要在正确的价格区间内
	 **/
	private $price;
	
	/** 
	 * 属性:属性值。包括区服属性及网游垂直属性,但传递的属性ID需要加前缀标识是一般属性还是垂直属性。即：一般属性前面加cp_；担保垂直属性前面加db_cp_；寄售垂直属性前面加js_cp_；垂直属性密码开头加上pwd_；二次密码加上pwd2_。而垂直属性密码又分担保和寄售，因此完整的头部应该为db_cp_pwd_
	 **/
	private $props;
	
	/** 
	 * 宝贝标题，若是游戏币发布，仅需传递卖家发布选择的标题后缀，例如：即买即发。
	 **/
	private $title;
	
	/** 
	 * 方便交易时间
	 **/
	private $tradeTime;
	
	/** 
	 * 发布类型（寄售CONSIGNMENT，担保GUARANTEE）
	 **/
	private $type;
	
	/** 
	 * 游戏币单位
	 **/
	private $unit;
	
	/** 
	 * 每份游戏币价格，允许小数点后两位
	 **/
	private $unitPrice;
	
	/** 
	 * 有效期。可选值:7,14;单位:天
	 **/
	private $validThru;
	
	private $apiParas = array();
	
	public function setApproveStatus($approveStatus)
	{
		$this->approveStatus = $approveStatus;
		$this->apiParas["approve_status"] = $approveStatus;
	}

	public function getApproveStatus()
	{
		return $this->approveStatus;
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

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setIsDeposit($isDeposit)
	{
		$this->isDeposit = $isDeposit;
		$this->apiParas["is_deposit"] = $isDeposit;
	}

	public function getIsDeposit()
	{
		return $this->isDeposit;
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

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
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

	public function setTradeTime($tradeTime)
	{
		$this->tradeTime = $tradeTime;
		$this->apiParas["trade_time"] = $tradeTime;
	}

	public function getTradeTime()
	{
		return $this->tradeTime;
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

	public function setUnit($unit)
	{
		$this->unit = $unit;
		$this->apiParas["unit"] = $unit;
	}

	public function getUnit()
	{
		return $this->unit;
	}

	public function setUnitPrice($unitPrice)
	{
		$this->unitPrice = $unitPrice;
		$this->apiParas["unit_price"] = $unitPrice;
	}

	public function getUnitPrice()
	{
		return $this->unitPrice;
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
		return "taobao.game.item.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkNotNull($this->num,"num");
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkNotNull($this->props,"props");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->tradeTime,"tradeTime");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
