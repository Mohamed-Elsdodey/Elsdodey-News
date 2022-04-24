var contente=new XMLHttpRequest();
var mydata;
var newsshtml;
var country=`eg`;


function myFunction()
{
  startinng('sports');
}

startinng('sports');


   function startinng(e)  {
    country=document.getElementById('countries').value;
  


var url=`https://newsapi.org/v2/top-headlines?country=`+country+`&category=`+e+`&apiKey=09958d01f4ca4b94b1c31e675ada1c33`;
contente.open('get',url,true);
contente.send();
contente.onreadystatechange=showw;
}
function showw()
{
 
    if (contente.readyState == 4 && contente.status == 200) 
    {
        
    mydata =JSON.parse(contente.response).articles;
       console.log(mydata);
       dislay();
    }
}
function dislay()
{
var cartona=``;
var coursalll=``;
var count=0;
  for(var i=0;i<mydata.length;i++)
{
if(mydata[i].urlToImage!=null)
{
cartona +=` 
<div class="col-md-8 my-4">
<img src="`+mydata[i].urlToImage+`"class="w-100 h-100">
</div>
<div class="col-md-4   text-center my-4">
<h5>`+mydata[i].title+`</h5>
<p>`+mydata[i].description+`</p>
<p style="color:black;"> Published At : `+mydata[i].publishedAt+`<p>
<div class="row">
<div class=" ml-auto">
<br>
<a href="`+mydata[i].url+`" target="_blank" class="badge badge-dark">Read more >></a>
</div>
</div>
</div></div> 
<div class="col-md-12 " >
<hr>
</div>
`;
}

if(count>5)
  {continue;
  }
if(count==0)
{
if(mydata[i].urlToImage!=null)
{
  coursalll +=`
<div class="carousel-item active">
      <img src="`+mydata[i].urlToImage+`"  height="500px"class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>`+mydata[i].title+`</h5>
        <p>`+mydata[i].description+`</p>
      </div>
    </div>
`;
  
count++;

}
}

else
{

if(mydata[i].urlToImage!=null)
{

  
  if(count==1 )
  {
    count++;
    continue;
  }

  coursalll +=`
<div class="carousel-item">
      <img src="`+mydata[i].urlToImage+`" height="500px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>`+mydata[i].title+`</h5>
        <p>`+mydata[i].description+`</p>
      </div>
    </div>
`;  
count++;
}
}
}
console.log(coursalll);
document.getElementById('rowresult').innerHTML=cartona;
document.getElementById('demmo').innerHTML =coursalll;
}