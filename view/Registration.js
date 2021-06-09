window.onload=function(){
  let urlString= window.location.href
  let url= new URL(urlString);
  let errormsg= url.searchParams.get("erromsg");
  if(errormsg && errormsg.length > 0){
     document.getElementsByClassName('error')[0].innerHTML=errormsg;
  }
  else{
    document.getElementsByClassName('error')[0].innerHTML="";
  }
}
  