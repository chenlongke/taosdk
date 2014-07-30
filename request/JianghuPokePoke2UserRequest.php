<?php
/**
 * TOP API: taobao.jianghu.poke.poke2User request
 * 
 * @author auto create
 * @since 1.0, 2011-09-13 00:00:00
 */
class JianghuPokePoke2UserRequest
{
	/** 
	 * 如果使用自定义动作必须提供该参数且pokeInfoId不提供，自定义动作动作只允许输入长度不超过10的中英文或数字，一个中文字符和一个英文字符的长度都是1，禁忌词将会被替换
	 **/
	private $content;
	
	/** 
	 * poke信息id(须数字)
	 **/
	private $pokeInfoId;
	
	/** 
	 * 接受者userid(须数字)
	 **/
	private $toUid;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setPokeInfoId($pokeInfoId)
	{
		$this->pokeInfoId = $pokeInfoId;
		$this->apiParas["poke_info_id"] = $pokeInfoId;
	}

	public function getPokeInfoId()
	{
		return $this->pokeInfoId;
	}

	public function setToUid($toUid)
	{
		$this->toUid = $toUid;
		$this->apiParas["to_uid"] = $toUid;
	}

	public function getToUid()
	{
		return $this->toUid;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.poke.poke2User";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->toUid,"toUid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
