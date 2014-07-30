<?php
/**
 * TOP API: taobao.cms.tparticle.push request
 * 
 * @author auto create
 * @since 1.0, 2012-03-20 00:00:00
 */
class CmsTparticlePushRequest
{
	/** 
	 * 第三方appkey
	 **/
	private $appkey;
	
	/** 
	 * 资讯导语
	 **/
	private $articleAbstract;
	
	/** 
	 * 作者
	 **/
	private $author;
	
	/** 
	 * 作者url
	 **/
	private $authorUrl;
	
	/** 
	 * 第三版块id
	 **/
	private $categoryId;
	
	/** 
	 * 资讯正文
	 **/
	private $content;
	
	/** 
	 * 判断这个api调用对应的操作，包括,insert, update ,delete
	 **/
	private $opType;
	
	/** 
	 * 资讯来源
	 **/
	private $source;
	
	/** 
	 * 来源url
	 **/
	private $sourceUrl;
	
	/** 
	 * 资讯标题
	 **/
	private $title;
	
	/** 
	 * 第三方文章id
	 **/
	private $tpArticleId;
	
	/** 
	 * 外链链接。 点击跳转到第三方对应的链接
	 **/
	private $url;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setArticleAbstract($articleAbstract)
	{
		$this->articleAbstract = $articleAbstract;
		$this->apiParas["article_abstract"] = $articleAbstract;
	}

	public function getArticleAbstract()
	{
		return $this->articleAbstract;
	}

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

	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
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

	public function setOpType($opType)
	{
		$this->opType = $opType;
		$this->apiParas["op_type"] = $opType;
	}

	public function getOpType()
	{
		return $this->opType;
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

	public function setTpArticleId($tpArticleId)
	{
		$this->tpArticleId = $tpArticleId;
		$this->apiParas["tp_article_id"] = $tpArticleId;
	}

	public function getTpArticleId()
	{
		return $this->tpArticleId;
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
		return "taobao.cms.tparticle.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appkey,"appkey");
		RequestCheckUtil::checkNotNull($this->articleAbstract,"articleAbstract");
		RequestCheckUtil::checkNotNull($this->author,"author");
		RequestCheckUtil::checkNotNull($this->authorUrl,"authorUrl");
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->opType,"opType");
		RequestCheckUtil::checkNotNull($this->source,"source");
		RequestCheckUtil::checkNotNull($this->sourceUrl,"sourceUrl");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->tpArticleId,"tpArticleId");
		RequestCheckUtil::checkNotNull($this->url,"url");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
