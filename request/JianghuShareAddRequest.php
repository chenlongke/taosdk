<?php
/**
 * TOP API: taobao.jianghu.share.add request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class JianghuShareAddRequest
{
	/** 
	 * 分享短评(最长210字，不区分中文英文)
	 **/
	private $comment;
	
	/** 
	 * 多媒体源封面链接(如视频第一帧图片地址，最长500字，不区分中文英文)
	 **/
	private $coverUrl;
	
	/** 
	 * 多媒体源播放链接(最长500字，不区分中文英文)，分享视频和音频时候该参数必须
	 **/
	private $sourceUrl;
	
	/** 
	 * 内容标题(如音乐就是歌曲名称，最长120个字，不区分中文英文)
	 **/
	private $title;
	
	/** 
	 * 内容类型枚举(暂只支持下列格式 page:网页，vedio:视频，audio:音频。注：视频只支持优酷和土豆，音频只支持mp3和wma)
	 **/
	private $type;
	
	/** 
	 * 内容来源链接(最长200字，不区分中文英文)
	 **/
	private $url;
	
	private $apiParas = array();
	
	public function setComment($comment)
	{
		$this->comment = $comment;
		$this->apiParas["comment"] = $comment;
	}

	public function getComment()
	{
		return $this->comment;
	}

	public function setCoverUrl($coverUrl)
	{
		$this->coverUrl = $coverUrl;
		$this->apiParas["cover_url"] = $coverUrl;
	}

	public function getCoverUrl()
	{
		return $this->coverUrl;
	}

	public function setSourceUrl($sourceUrl)
	{
		$this->sourceUrl = $sourceUrl;
		$this->apiParas["source_url"] = $sourceUrl;
	}

	public function getSourceUrl()
	{
		return $this->sourceUrl;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.share.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkNotNull($this->url,"url");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
