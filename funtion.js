var arr_hinh=[
    "assets/img/banner_run7.jpg",
    "assets/img/banner_run8.jpg",
    "assets/img/banner_run9.webp"
];
var index=0;
function Tien(){
    index++;
    if(index==arr_hinh.length) index=0;
    document.getElementById("hinh").src=arr_hinh[index];
}
setInterval("Tien()",5000);