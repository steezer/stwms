<!--<?php die(0);?>-->
<?xml version="1.0" encoding="UTF-8"?>
<root><model fd="id|field|name|formtype|tips|css|minlength|maxlength|pattern|errortips|setting|msetting|dsetting|issystem|isbase|listorder|disabled|groupids" name="住客信息" desc="租房管理系统住客信息" iscat="1" width="600" height="600" disabled="0" type="1" autoid="21" isinstall="1"><it><v0>1</v0><v1>catid</v1><v2>栏目</v2><v3>catid</v3><v4/><v5/><v6/><v7/><v8/><v9/><v10/><v11/><v12>array (  'isindex' =&gt; '1',)</v12><v13>1</v13><v14>1</v14><v15>12</v15><v16/><v17>0|-1</v17></it><it><v0>2</v0><v1>status</v1><v2>状态</v2><v3>smallint</v3><v4/><v5/><v6/><v7/><v8/><v9/><v10/><v11/><v12>array (  'isindex' =&gt; '1',)</v12><v13>1</v13><v14>1</v14><v15>0</v15><v16/><v17>0|-1</v17></it><it><v0>3</v0><v1>isimages</v1><v2>是否有图片</v2><v3>smallint</v3><v4/><v5/><v6/><v7/><v8/><v9/><v10/><v11/><v12>array (  'isindex' =&gt; '1',)</v12><v13>1</v13><v14>1</v14><v15>0</v15><v16/><v17>0|-1</v17></it><it><v0>4</v0><v1>user_id</v1><v2>用户ID</v2><v3>integeru</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'minnumber' =&gt; '',  'maxnumber' =&gt; '',  'width' =&gt; '400',  'defaultvalue' =&gt; '',)</v10><v11>array (  'istolist' =&gt; '0',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '0',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '1',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>1</v14><v15>11</v15><v16/><v17>-1|0</v17></it><it><v0>5</v0><v1>id_type</v1><v2>证件类型</v2><v3>box</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'options' =&gt; '身份证|0&#13;军人证件|1&#13;港澳台身份证|2&#13;华侨身份证|3&#13;外籍护照|4',  'boxtype' =&gt; 'radio',  'width' =&gt; '100',  'rows' =&gt; '4',  'defaultvalue' =&gt; '0',  'outputtype' =&gt; '0',  'filtertype' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '0',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '255',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>10</v15><v16/><v17>-1|0</v17></it><it><v0>6</v0><v1>name</v1><v2>姓名</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '150',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '500',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>11</v15><v16/><v17>-1|0</v17></it><it><v0>7</v0><v1>id_no</v1><v2>证件号码</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '250',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '500',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>8</v15><v16/><v17>-1|0</v17></it><it><v0>8</v0><v1>addr_name</v1><v2>地图位置</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '400',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '0',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '0',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '500',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>5</v15><v16/><v17>-1|0</v17></it><it><v0>9</v0><v1>mobile</v1><v2>联系电话</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '150',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '500',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>6</v15><v16/><v17>-1|0</v17></it><it><v0>10</v0><v1>addtime</v1><v2>添加时间</v2><v3>datetime</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'format' =&gt; 'Y-m-d H:i:s',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '1',  'maxchars' =&gt; '80',  'width' =&gt; '155',  'align' =&gt; 'center',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '1',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>1</v14><v15>0</v15><v16/><v17>-1|0</v17></it><it><v0>11</v0><v1>id_img</v1><v2>证件图片</v2><v3>image</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'show_type' =&gt; '1',  'width' =&gt; '300',  'upload_maxsize' =&gt; '2048',  'upload_allowext' =&gt; 'gif|jpg|jpeg|png|bmp',  'watermark' =&gt; '0',  'isselectimage' =&gt; '1',  'auto_cut' =&gt; '1',  'md5_check' =&gt; '1',  'images_width' =&gt; '1200',  'images_height' =&gt; '1000',)</v10><v11>array (  'istolist' =&gt; '1',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '200',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>10</v15><v16/><v17>-1|0</v17></it><it><v0>12</v0><v1>nation</v1><v2>民族</v2><v3>box</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'options' =&gt; '汉族|0&#13;维吾尔族/新疆|1&#13;其他|2',  'boxtype' =&gt; 'radio',  'width' =&gt; '110',  'rows' =&gt; '4',  'defaultvalue' =&gt; '0',  'outputtype' =&gt; '0',  'filtertype' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '0',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '255',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>7</v15><v16/><v17>-1|0</v17></it><it><v0>13</v0><v1>room_no</v1><v2>房间号</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '100',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '1',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>4</v15><v16/><v17>-1|0</v17></it><it><v0>14</v0><v1>come_date</v1><v2>入住日期</v2><v3>datetime</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'format' =&gt; 'Y-m-d',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '1',  'maxchars' =&gt; '80',  'width' =&gt; '80',  'align' =&gt; 'center',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '1',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>3</v15><v16/><v17>-1|0</v17></it><it><v0>15</v0><v1>left_date</v1><v2>退房日期</v2><v3>datetime</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'format' =&gt; 'Y-m-d',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '1',  'maxchars' =&gt; '80',  'width' =&gt; '80',  'align' =&gt; 'center',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '1',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>2</v15><v16/><v17>-1|0</v17></it><it><v0>16</v0><v1>latitude</v1><v2>地理纬度</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '100',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '0',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '0',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>1</v14><v15>1</v15><v16/><v17>-1|0</v17></it><it><v0>17</v0><v1>longitude</v1><v2>地理经度</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '200',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '0',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '0',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>1</v14><v15>1</v15><v16/><v17>-1|0</v17></it><it><v0>18</v0><v1>id_addr</v1><v2>证件地址</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '400',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'left',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>10</v15><v16/><v17>-1|0</v17></it><it><v0>19</v0><v1>detail_addr</v1><v2>详细地址</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '400',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>5</v15><v16/><v17>-1|0</v17></it><it><v0>20</v0><v1>sex</v1><v2>性别</v2><v3>box</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'options' =&gt; '男|1&#13;女|2&#13;保密|0',  'boxtype' =&gt; 'radio',  'width' =&gt; '80',  'rows' =&gt; '4',  'defaultvalue' =&gt; '1',  'outputtype' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '1',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '0',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>7</v15><v16/><v17>-1|0</v17></it><it><v0>21</v0><v1>source</v1><v2>来源</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '100',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '1',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '0',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>1</v14><v15>1</v15><v16/><v17>-1|0</v17></it></model></root>
