<!--<?php die(0);?>-->
<?xml version="1.0" encoding="UTF-8"?>
<root><model fd="id|field|name|formtype|tips|css|minlength|maxlength|pattern|errortips|setting|msetting|dsetting|issystem|isbase|listorder|disabled|groupids" name="微信媒体消息" desc="存储微信中图片或音频文件" iscat="1" width="" height="" disabled="0" type="1" autoid="9" isinstall="1"><it><v0>1</v0><v1>catid</v1><v2>栏目</v2><v3>catid</v3><v4/><v5/><v6/><v7/><v8/><v9/><v10/><v11/><v12>array (  'isindex' =&gt; '1',)</v12><v13>1</v13><v14>1</v14><v15>12</v15><v16/><v17>0|-1</v17></it><it><v0>2</v0><v1>status</v1><v2>状态</v2><v3>smallint</v3><v4/><v5/><v6/><v7/><v8/><v9/><v10/><v11/><v12>array (  'isindex' =&gt; '1',)</v12><v13>1</v13><v14>1</v14><v15>7</v15><v16/><v17>0|-1</v17></it><it><v0>3</v0><v1>isimages</v1><v2>是否有图片</v2><v3>smallint</v3><v4/><v5/><v6/><v7/><v8/><v9/><v10/><v11/><v12>array (  'isindex' =&gt; '1',)</v12><v13>1</v13><v14>1</v14><v15>5</v15><v16/><v17>0|-1</v17></it><it><v0>4</v0><v1>group</v1><v2>群名称</v2><v3>text</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '400',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '1',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'left',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '1',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>4</v15><v16/><v17>-1|0</v17></it><it><v0>5</v0><v1>user</v1><v2>用户名称</v2><v3>text</v3><v4>用户昵称或群昵称</v4><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '400',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '1',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '1',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '1',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>3</v15><v16/><v17>-1|0</v17></it><it><v0>6</v0><v1>type</v1><v2>类型</v2><v3>text</v3><v4>媒体类型</v4><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '400',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '1',  'isorder' =&gt; '1',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'left',  'issearch' =&gt; '1',  'iseqsearch' =&gt; '1',)</v11><v12>array (  'maxlen' =&gt; '500',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>2</v15><v16/><v17>-1|0</v17></it><it><v0>7</v0><v1>addtime</v1><v2>添加时间</v2><v3>datetime</v3><v4/><v5/><v6>0</v6><v7/><v8/><v9/><v10>array ('format' =&gt; 'Y-m-d H:i:s',)</v10><v11>array ('istolist' =&gt; '1','isorder' =&gt; '0','maxchars' =&gt; '80','width' =&gt; '120','align' =&gt; 'center','issearch' =&gt; '0','iseqsearch' =&gt; '0',)</v11><v12>array ('maxlen' =&gt; '0','isindex' =&gt; '0','isunique' =&gt; '0','isnull' =&gt; '0','issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>0</v15><v16/><v17>-1|0</v17></it><it><v0>8</v0><v1>path</v1><v2>文件路径</v2><v3>text</v3><v4>在服务器端的绝对路径</v4><v5/><v6>0</v6><v7/><v8/><v9/><v10>array (  'width' =&gt; '400',  'defaultvalue' =&gt; '',  'ispassword' =&gt; '0',  'inputalert' =&gt; '0',)</v10><v11>array (  'istolist' =&gt; '0',  'isorder' =&gt; '0',  'maxchars' =&gt; '80',  'width' =&gt; '',  'align' =&gt; 'center',  'issearch' =&gt; '0',  'iseqsearch' =&gt; '0',)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>0</v15><v16/><v17>-1|0</v17></it><it><v0>9</v0><v1>msgid</v1><v2>消息ID</v2><v3>text</v3><v4></v4><v5></v5><v6>0</v6><v7></v7><v8></v8><v9></v9><v10>array (
  'width' =&gt; '400',
  'defaultvalue' =&gt; '',
  'ispassword' =&gt; '0',
  'inputalert' =&gt; '0',
)</v10><v11>array (
  'istolist' =&gt; '1',
  'isorder' =&gt; '0',
  'maxchars' =&gt; '80',
  'width' =&gt; '',
  'align' =&gt; 'center',
  'issearch' =&gt; '0',
  'iseqsearch' =&gt; '0',
)</v11><v12>array (  'maxlen' =&gt; '0',  'isindex' =&gt; '0',  'isunique' =&gt; '0',  'isnull' =&gt; '0',  'issubtable' =&gt; '0',)</v12><v13>0</v13><v14>0</v14><v15>1</v15><v16/><v17>-1|0</v17></it></model></root>
