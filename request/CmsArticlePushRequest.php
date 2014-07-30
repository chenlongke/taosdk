<?php
/**
 * TOP API: taobao.cms.article.push request
 * 
 * @author auto create
 * @since 1.0, 2011-12-01 00:00:00
 */
class CmsArticlePushRequest
{
	/** 
	 * 发表文章的作者
	 **/
	private $author;
	
	/** 
	 * 发表文章作者链接
	 **/
	private $authorUrl;
	
	/** 
	 * 描述资讯频道信息
	 **/
	private $category;
	
	/** 
	 * 淘宝资讯内容的详细信息
	 **/
	private $content;
	
	/** 
	 * 文章来源信息
	 **/
	private $source;
	
	/** 
	 * 文章出处的链接信息
	 **/
	private $sourceUrl;
	
	/** 
	 * 淘宝资讯标题
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setAuthor($author)
	{
		$this->author = $author;
		$this->apiParas["author"] = $author;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setAuthorUrl($authorUrl)
	{
		$this->authorUrl = $authorUrl;
		$this->apiParas["author_url"] = $authorUrl;
	}

	public function getAuthorUrl()
	{
		return $this->authorUrl;
	}

	public function setCategory($category)
	{
		$this->category = $category;
		$this->apiParas["category"] = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
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

	public function getApiMethodName()
	{
		return "taobao.cms.article.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->author,"author");
		RequestCheckUtil::checkNotNull($this->authorUrl,"authorUrl");
		RequestCheckUtil::checkNotNull($this->category,"category");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->source,"source");
		RequestCheckUtil::checkNotNull($this->sourceUrl,"sourceUrl");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
