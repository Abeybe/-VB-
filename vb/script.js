//関数(ここでは動作のこと)を定義
function onclickSayHello(){
    //htmlからid"sayhello"を取得、クリックされたらalert関数を呼び出す。
    document.getElementById("sayhello").onclick=function(){
        alert("Hello");
    }
}
