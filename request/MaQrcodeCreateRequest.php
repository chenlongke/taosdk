<?php
/**
 * TOP API: taobao.ma.qrcode.create request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class MaQrcodeCreateRequest
{
	/** 
	 * 该二维码对应的业务ID，如宝贝的id，用于码平台管理，请保持其唯一性
	 **/
	private $bizId;
	
	/** 
	 * 业务模式,0为未知，1为为自己创建二维码，2为为他人创建二维码
	 **/
	private $bizMode;
	
	/** 
	 * 业务对应的页面名称
	 **/
	private $bizPageName;
	
	/** 
	 * 业务对应的商家帐号昵称
	 **/
	private $bizSellerNick;
	
	/** 
	 * 业务类型，淘宝天下为tbtx
	 **/
	private $bizType;
	
	/** 
	 * 二维码推广渠道id，0为无
	 **/
	private $channelId;
	
	/** 
	 * 二维码高度
	 **/
	private $height;
	
	/** 
	 * 二维码模版id，淘宝天下为4
	 **/
	private $templateId;
	
	/** 
	 * 生成url所需数据，与url_data_type相关：当url_data_type为1时： url_data为url,如:http://a.m.taobao.com/i435235.htm当url_data_type为2时： url_data为shopId,如:312541234当url_data_type为3时： url_data为itemId,如:3245324
	 **/
	private $urlData;
	
	/** 
	 * url生成类型1:urlData是url 生成指定url二维码,2:urlData是shopId 生成店铺首页二维码,3:urlData是itemId 生成宝贝详情页二维码
	 **/
	private $urlDataType;
	
	/** 
	 * 二维码宽度
	 **/
	private $width;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setBizMode($bizMode)
	{
		$this->bizMode = $bizMode;
		$this->apiParas["biz_mode"] = $bizMode;
	}

	public function getBizMode()
	{
		return $this->bizMode;
	}

	public function setBizPageName($bizPageName)
	{
		$this->bizPageName = $bizPageName;
		$this->apiParas["biz_page_name"] = $bizPageName;
	}

	public function getBizPageName()
	{
		return $this->bizPageName;
	}

	public function setBizSellerNick($bizSellerNick)
	{
		$this->bizSellerNick = $bizSellerNick;
		$this->apiParas["biz_seller_nick"] = $bizSellerNick;
	}

	public function getBizSellerNick()
	{
		return $this->bizSellerNick;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setChannelId($channelId)
	{
		$this->channelId = $channelId;
		$this->apiParas["channel_id"] = $channelId;
	}

	public function getChannelId()
	{
		return $this->channelId;
	}

	public function setHeight($height)
	{
		$this->height = $height;
		$this->apiParas["height"] = $height;
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function setUrlData($urlData)
	{
		$this->urlData = $urlData;
		$this->apiParas["url_data"] = $urlData;
	}

	public function getUrlData()
	{
		return $this->urlData;
	}

	public function setUrlDataType($urlDataType)
	{
		$this->urlDataType = $urlDataType;
		$this->apiParas["url_data_type"] = $urlDataType;
	}

	public function getUrlDataType()
	{
		return $this->urlDataType;
	}

	public function setWidth($width)
	{
		$this->width = $width;
		$this->apiParas["width"] = $width;
	}

	public function getWidth()
	{
		return $this->width;
	}

	public function getApiMethodName()
	{
		return "taobao.ma.qrcode.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->bizPageName,"bizPageName");
		RequestCheckUtil::checkNotNull($this->bizSellerNick,"bizSellerNick");
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->height,"height");
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
		RequestCheckUtil::checkNotNull($this->urlData,"urlData");
		RequestCheckUtil::checkNotNull($this->urlDataType,"urlDataType");
		RequestCheckUtil::checkNotNull($this->width,"width");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
