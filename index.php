<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AQs puer javascript Lib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="src/AQs.js"></script>
</head>
<body>
<h1>AQs Puer javascript ajax Lib </h1>
<input   type="text" class="form-control" name="Username" id="Username" placeholder="Enter user name..."   value="">
<input   type="text" class="Search" name="Search" id="Search" placeholder="Enter Search value..."   value="">
<button id="ADDuser"  >add New Usere</button>
<div id="result"></div>
<div id="result2">Hello whorled 2018</div>
<div id="res1" class="Re1"></div>
<div id="res2" class="Re2">Hello ADham Allam 2018</div>

<script type="text/javascript">
    var axjson = $.$("#Username");
    var result = $.$("#result");
    // var result2 = $.$("#result2");
    var url='http://www.scv.net/users/chackUserjax/';

    axjson.addEventListener("blur", function(){
        'use strict';
        $.AQs({type: 'post', url: url, data: '?Username='+this.value,imsg:0, sucs: function (Msg) {
                result.innerHTML=Msg;
                $.$("#result2").innerHTML = Msg;
            }

        });
    });
    //example
    var btc=9850, walt=5;
    $.sc(9000*5);
    $.sc(btc*walt);
    var vl =$.gTr("#Username",'placeholder');
    $.sc($.gTr("#Username",'placeholder'));
    // alert(vl);
    $.sTr('#Username',['placeholder','enter new user name ..']);

    var ct = $.cTxt('.Re2');
    var ct2 = $.cTxt('#result2');
    $.sc(ct2);
    $.$('.Re1').innerHTML=ct;
/*
    var Search =$.$('#Search');
    Search.addEventListener("blur", function() {
       $.$('.Re1').innerHTML= $._val('#Search');
    });
*/

/*
<input   type="text"  name="Search" id="Search" placeholder="Enter Search value...">
<button id="ADDuser"  >add New Usere</button>
<div id="res1" class="Re1"></div>

*/

    var ADDuser =$.$('#ADDuser');
    ADDuser.onclick = function () {
        'use strict';
        var urls='Server.php',userName =$.$('#Search').value,uN =$._val('#Search');
        $.AQs({type:'POST',url:urls, data:'?Username='+userName+'&uN='+uN,sucs:function (Msg)
            {
                $.$('.Re1').innerHTML=Msg;
            }
        })
    }

</script>
</body>
</html>