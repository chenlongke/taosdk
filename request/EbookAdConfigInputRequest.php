<?php
/**
 * TOP API: taobao.ebook.ad.config.input request
 * 
 * @author auto create
 * @since 1.0, 2014-03-04 00:00:00
 */
class EbookAdConfigInputRequest
{
	/** 
	 * 文字链广告文案，不多于10个字
	 **/
	private $words;
	
	/** 
	 * 广告页面的链接，须为淘宝的地址
	 **/
	private $wordsLink;
	
	private $apiParas = array();
	
	public function setWords($words)
	{
		$this->words = $words;
		$this->apiParas["words"] = $words;
	}

	public function getWords()
	{
		return $this->words;
	}

	public function setWordsLink($wordsLink)
	{
		$this->wordsLink = $wordsLink;
		$this->apiParas["words_link"] = $wordsLink;
	}

	public function getWordsLink()
	{
		return $this->wordsLink;
	}

	public function getApiMethodName()
	{
		return "taobao.ebook.ad.config.input";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->words,"words");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
