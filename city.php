<?php
//SELECT b.letter,a.region_name FROM `je_region` a left join `letter` b on CONV(HEX(left(CONVERT(a.region_name using gbk),1)),16,10) between b.begin and b.end where region_type=2 order by CONVERT(a.region_name using gbk) limit 600   找出

$city='A	阿坝藏族羌族自治州	
A	阿克苏地区	
A	阿拉善盟	
A	阿勒泰地区	
A	阿里地区	
A	安康市	
A	安庆市	
A	安顺市	
A	安阳市	
A	鞍山市	
B	巴彦淖尔市	
B	巴音郭楞蒙古自治州	
B	巴中市	
B	白城市	
B	白山市	
B	白银市	
B	百色市	
B	蚌埠市	
B	包头市	
B	宝鸡市	
B	保定市	
B	保山市	
B	北海市	
B	本溪市	
B	毕节市	
B	滨州市	
B	亳州市	
B	博尔塔拉蒙古自治州	
C	沧州市	
C	昌都市	
C	昌吉回族自治州	
C	长春市	
C	长沙市	
C	长治市	
C	常德市	
C	常州市	
C	朝阳市	
C	潮州市	
C	郴州市	
C	成都市	
C	承德市	
C	池州市	
C	赤峰市	
C	崇左市	
C	滁州市	
C	楚雄彝族自治州	
D	达州市	
D	大理白族自治州	
D	大连市	
D	大庆市	
D	大同市	
D	大兴安岭地区	
D	丹东市	
D	儋州市	
D	德宏傣族景颇族自治州	
D	德阳市	
D	德州市	
D	迪庆藏族自治州	
D	定西市	
D	东莞市	
D	东营市	
E	鄂尔多斯市	
E	鄂州市	
E	恩施土家族苗族自治州	
F	防城港市	
F	佛山市	
F	福州市	
F	抚顺市	
F	抚州市	
F	阜新市	
F	阜阳市	
G	甘南藏族自治州	
G	甘孜藏族自治州	
G	赣州市	
G	固原市	
G	广安市	
G	广元市	
G	广州市	
G	贵港市	
G	贵阳市	
G	桂林市	
G	果洛藏族自治州	
H	哈尔滨市	
H	哈密市	
H	海北藏族自治州	
H	海东市	
H	海口市	
H	海南藏族自治州	
H	海西蒙古族藏族自治州	
H	邯郸市	
H	汉中市	
H	杭州市	
H	合肥市	
H	和田地区	
H	河池市	
H	河源市	
H	菏泽市	
H	贺州市	
H	鹤壁市	
H	鹤岗市	
H	黑河市	
H	衡水市	
H	衡阳市	
H	红河哈尼族彝族自治州	
H	呼和浩特市	
H	呼伦贝尔市	
H	湖州市	
H	葫芦岛市	
H	怀化市	
H	淮安市	
H	淮北市	
H	淮南市	
H	黄冈市	
H	黄南藏族自治州	
H	黄山市	
H	黄石市	
H	惠州市	
J	鸡西市	
J	吉安市	
J	吉林市	
J	济南市	
J	济宁市	
J	佳木斯市	
J	嘉兴市	
J	嘉峪关市	
J	江门市	
J	焦作市	
J	揭阳市	
J	金昌市	
J	金华市	
J	锦州市	
J	晋城市	
J	晋中市	
J	荆门市	
J	荆州市	
J	景德镇市	
J	九江市	
J	酒泉市	
K	喀什地区	
K	开封市	
K	克拉玛依市	
K	克孜勒苏柯尔克孜自治州	
K	昆明市	
L	拉萨市	
L	来宾市	
L	莱芜市	
L	兰州市	
L	廊坊市	
L	乐山市	
L	丽江市	
L	丽水市	
L	连云港市	
L	凉山彝族自治州	
L	辽阳市	
L	辽源市	
L	聊城市	
L	林芝市	
L	临沧市	
L	临汾市	
L	临夏回族自治州	
L	临沂市	
L	柳州市	
L	六安市	
L	六盘水市	
L	龙岩市	
L	陇南市	
L	娄底市	
L	泸州市	
L	吕梁市	
L	洛阳市	
L	漯河市	
M	马鞍山市	
M	茂名市	
M	眉山市	
M	梅州市	
M	绵阳市	
M	牡丹江市	
N	内江市	
N	那曲市	
N	南昌市	
N	南充市	
N	南京市	
N	南宁市	
N	南平市	
N	南通市	
N	南阳市	
N	宁波市	
N	宁德市	
N	怒江傈僳族自治州	
P	攀枝花市	
P	盘锦市	
P	平顶山市	
P	平凉市	
P	萍乡市	
P	莆田市	
P	濮阳市	
P	普洱市	
Q	七台河市	
Q	齐齐哈尔市	
Q	黔东南苗族侗族自治州	
Q	黔南布依族苗族自治州	
Q	黔西南布依族苗族自治州	
Q	钦州市	
Q	秦皇岛市	
Q	青岛市	
Q	清远市	
Q	庆阳市	
Q	曲靖市	
Q	衢州市	
Q	泉州市	
R	日喀则市	
R	日照市	
S	三门峡市	
S	三明市	
S	三沙市	
S	三亚市	
S	山南市	
S	汕头市	
S	汕尾市	
S	商洛市	
S	商丘市	
S	上饶市	
S	韶关市	
S	邵阳市	
S	绍兴市	
S	深圳市	
S	沈阳市	
S	十堰市	
S	石家庄市	
S	石嘴山市	
S	双鸭山市	
S	朔州市	
S	四平市	
S	松原市	
S	苏州市	
S	宿迁市	
S	宿州市	
S	绥化市	
S	随州市	
S	遂宁市	
T	塔城地区	
T	台州市	
T	太原市	
T	泰安市	
T	泰州市	
T	唐山市	
T	天水市	
T	铁岭市	
T	通化市	
T	通辽市	
T	铜川市	
T	铜陵市	
T	铜仁市	
T	吐鲁番市	
W	威海市	
W	潍坊市	
W	渭南市	
W	温州市	
W	文山壮族苗族自治州	
W	乌海市	
W	乌兰察布市	
W	乌鲁木齐市	
W	无锡市	
W	吴忠市	
W	芜湖市	
W	梧州市	
W	武汉市	
W	武威市	
X	西安市	
X	西宁市	
X	西双版纳傣族自治州	
X	锡林郭勒盟	
X	厦门市	
X	咸宁市	
X	咸阳市	
X	湘潭市	
X	湘西土家族苗族自治州	
X	襄阳市	
X	孝感市	
X	忻州市	
X	新乡市	
X	新余市	
X	信阳市	
X	兴安盟	
X	邢台市	
X	徐州市	
X	许昌市	
X	宣城市	
Y	雅安市	
Y	烟台市	
Y	延安市	
Y	延边朝鲜族自治州	
Y	盐城市	
Y	扬州市	
Y	阳江市	
Y	阳泉市	
Y	伊春市	
Y	伊犁哈萨克自治州	
Y	宜宾市	
Y	宜昌市	
Y	宜春市	
Y	益阳市	
Y	银川市	
Y	鹰潭市	
Y	营口市	
Y	永州市	
Y	榆林市	
Y	玉林市	
Y	玉树藏族自治州	
Y	玉溪市	
Y	岳阳市	
Y	云浮市	
Y	运城市	
Z	枣庄市	
Z	湛江市	
Z	张家界市	
Z	张家口市	
Z	张掖市	
Z	漳州市	
Z	昭通市	
Z	肇庆市	
Z	镇江市	
Z	郑州市	
Z	中山市	
Z	中卫市	
Z	舟山市	
Z	周口市	
Z	株洲市	
Z	珠海市	
Z	驻马店市	
Z	资阳市	
Z	淄博市	
Z	自贡市	
Z	遵义市	';
/*
[{
        "letter": "A",
        "data": [
            "阿克苏机场",
            "阿拉山口机场",
            "阿勒泰机场",
            "阿里昆莎机场",
            "安庆天柱山机场",
            "澳门国际机场"
        ]
    }]
*/
$city=explode("\r\n",$city);
$json='[';
foreach(range('A','Z') as $v){
	if($v!='A')$json.=',';
	$json.='{
        "letter": "'.$v.'",
        "data": [
            ';
	foreach($city as $vv){
		$vv=trim($vv);
		$vv=explode("\t",$vv);
		if($v==$vv[0]){
			$json.='"'.$vv[1].'",';	
		}
	}
	$json=trim($json,',');
	$json.='
        ]
    }';	
}
$json.=']';
echo $json;