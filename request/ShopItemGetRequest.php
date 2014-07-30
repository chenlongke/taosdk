<?php
/**
 * TOP API: taobao.shop.item.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-15 00:00:00
 */
class ShopItemGetRequest
{
	/** 
	 * 商品ID
	 **/
	private $auctionId;
	
	/** 
	 * 待查询指标：ItemSourceStruct数据结构的公开信息字段列表，以半角逗号（,）分割，可以是user_repeat_rate, auction_repeat_rate,uv,alipay_winner_num, alipay_trade_amt,alipay_convert,uv_contribute,related_alipay_trade_amt,auction_collect_num
	 **/
	private $fields;
	
	/** 
	 * 新老客户维度，其中：
1=老客户
0=不是老客户
	 **/
	private $isOld;
	
	/** 
	 * 统计时间窗口：其中
“1D”=为最近1天 
“7D“=为最近7天 
“30D“=为最近30天 
“60D“=为最近60天
“90D“=为最近90天
此参数必须和fields参数配合使用，fields包含
user_repeat_rate, auction_repeat_rate的scope只能传30d, 60d, 90d。
  fields包含
uv,alipay_winner_num, alipay_trade_amt,alipay_convert,uv_contribute,related_alipay_trade_amt,auction_collect_num的scope只能传1d,7d和30d
	 **/
	private $scope;
	
	/** 
	 * 来源细分粒度，其中：
0=不区分来源细分 
其他
2 店铺收藏
3 宝贝收藏
4 卖家中心
5 我的淘宝
6 直接访问
7 购物车
88 淘宝管理后台
87 淘宝收藏
16 富媒体广告
10 淘宝客
9 超级卖霸
80 钻石展位+
12 品牌广告
13 钻石展位
14 定价CPM
15 阿里旺旺广告
17 商业广告
18 全国联播
11 直通车
44 试用中心
20 淘宝搜索
21 淘宝店铺搜索
22 淘宝类目
23 淘宝专题
24 淘宝首页
25 淘宝频道
26 淘宝空间
27 嗨淘
28 淘宝画报
29 淘江湖
30 淘宝其他店铺
31 淘宝信用评价
32 阿里旺旺非广告
33 淘宝客搜索
34 商城首页
35 商城类目
36 商城搜索
37 商城店铺搜索
38 商城专题
39 商城频道
40 聚划算
41 淘女郎
42 淘宝旅行
43 新品中心
45 店铺动态
46 淘金币
47 哇哦
48 全球购
49 店铺街
50 天天特价
51 我爱淘折
52 淘宝促销
53 集分宝
54 淘宝社区
55 淘宝门户
56 一淘求购
57 淘宝帮派
58 淘宝试衣间
59 淘宝站内其他
76 淘宝圈子
77 淘宝礼物
78 双11大促
79 淘宝双十二
81 淘宝婚庆
82 清仓街
84 淘宝推推
85 淘宝预售
86 淘宝星店
96 超优汇
97 促销汇
98 聚想团
100 店内浏览
61 搜索引擎
74 淘宝站外其他
91 一淘搜索
92 促销活动
93 优惠券
94 决策页
90 一淘首页
95 一淘其他
	 **/
	private $srcId;
	
	private $apiParas = array();
	
	public function setAuctionId($auctionId)
	{
		$this->auctionId = $auctionId;
		$this->apiParas["auction_id"] = $auctionId;
	}

	public function getAuctionId()
	{
		return $this->auctionId;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setIsOld($isOld)
	{
		$this->isOld = $isOld;
		$this->apiParas["is_old"] = $isOld;
	}

	public function getIsOld()
	{
		return $this->isOld;
	}

	public function setScope($scope)
	{
		$this->scope = $scope;
		$this->apiParas["scope"] = $scope;
	}

	public function getScope()
	{
		return $this->scope;
	}

	public function setSrcId($srcId)
	{
		$this->srcId = $srcId;
		$this->apiParas["src_id"] = $srcId;
	}

	public function getSrcId()
	{
		return $this->srcId;
	}

	public function getApiMethodName()
	{
		return "taobao.shop.item.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionId,"auctionId");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->isOld,"isOld");
		RequestCheckUtil::checkNotNull($this->scope,"scope");
		RequestCheckUtil::checkNotNull($this->srcId,"srcId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
