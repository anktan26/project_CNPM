
function gio(){
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    if(m<10){
      m="0"+m;
    }
    if(s<10){
      s="0"+s;
    }
     setTimeout('gio()',1000);
    var _tb=h+":"+m+":"+s;
    document.getElementById("time").innerHTML=_tb+" || ";
 }

function date(){
    var d=new Date();
    var thu=["Chủ Nhật","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7"];
    var thang=["1","2","3","4","5","6","7","8","9","10","11","12"];
    document.getElementById("date").innerHTML=thu[d.getDay()] + " ngày " +d.getDate()+" - "+ thang[d.getMonth()]+" - "+d.getFullYear();
}