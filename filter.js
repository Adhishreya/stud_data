

var msg="";
function sort(str)
{ msg=str;
if(str!=="")
{



  var d=  document.getElementById("sortby");
  var i;
var len=d.options.length,sl,ss;
    
for(i=0;i<len;i++){
sl=str.length;
if(sl>=3){


so=d.options[i].value.substr(0,sl);
ss=so.toUpperCase();
if(str.toUpperCase()==ss){
    str=d.options[i].value;
  var t=new XMLHttpRequest();
  t.onreadystatechange=function(){

      if(this.readyState==4 && this.status==200){
document.getElementById("table").innerHTML=this.responseText;
// alert(this.responseText);

      }
      else
      { var tq=document.createElement("h1");
      tq.value="loading";
          document.appendChild("body")=tq;
      }
  };
  t.open("GET", "filter.php?q="+str, true);
      t.send();   
}
    }
}
}

















}
// function filter(){
//     // alert(y);
//     // html2canvas()
// //     str=str.toUpperCase();
// //     var td,tab,tr,va;
    
// //         tab=document.getElementById("table");
// //         tr=tab.getElementsByTagName("tr");
// //         for(ii=0;i<tr.length;i++){
// //             td=tr[i].getElementsByTagName("td")[3];
// //             if(td){
// //                 va=td.innerText||td.textContent;
// //                 if(va.indexOf(str)>-1){
// //                     tr[i].style.display="";
// //                 }
// //                 else{
// //                     tr[i].style.display="none";
// //                 }
// //             }
// //         }
    
// // }

// // Declare variables
// var input, filter, table, tr, td, i, txtValue;
// input = document.getElementById("red");
// filter = input.value.toUpperCase();
// table = document.getElementById("table");

// alert(table.index(y));

// tr = table.getElementsByTagName("tr");
// // alert("name".cellIndex);
// // Loop through all table rows, and hide those who don't match the search query
// for (i = 0; i < tr.length; i++) {
//   td = tr[i].getElementsByTagName("td")[1];
// //   alert(td);
//   if (td) {
//     txtValue = td.textContent || td.innerText;
//     if (txtValue.toUpperCase().indexOf(filter) > -1) {
//       tr[i].style.display = "";
//     } else {
//       tr[i].style.display = "none";
//     }
//   }
// }
// }





























function filter() {



  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("red");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
var roel=table.rows.item(0).cells;
var ii;
for(ii=0;ii<roel.length;ii++){
  if(roel.item(ii).innerHTML.toUpperCase()==msg.toUpperCase()){
    break;
  }
}

// alert(ii);

  tr = table.getElementsByTagName("tr");
// alert(ii);
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[ii];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
        
      }
    }
  }
}
