function hide(){
    var addstock = document.getElementById("stock1");
    var updatestock =document.getElementById("stock2");
    var frame1=document.getElementById("f1");
    var frame2=document.getElementById("f2");
    frame1.style.display=updatestock.checked ? "none": "block";
   frame2.style.display=addstock.checked ? "none" : "block";


}
