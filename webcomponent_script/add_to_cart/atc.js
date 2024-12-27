var defaultitem_num = 0;
document.getElementById('total_items').innerText = defaultitem_num;
function add(val){
    document.getElementById('hello').innerHTML +="<li>"+val+"<input type='button' value='x' onclick=remove()></input></li>";
    defaultitem_num=defaultitem_num+1; 
    document.getElementById('total_items').innerText = defaultitem_num;
    document.getElementById('border').innerHTML = '=============='
    
}


// remove items

function remove(){
    var listitem =  document.getElementsByTagName('li');
    for(var i=0 ; i<listitem.length; i++)
    {
        listitem[i].onclick=function(){
             this.parentNode.removeChild(this);  
        }   
    }
}