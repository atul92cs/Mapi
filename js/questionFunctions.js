deleteQuestion=(e)=>{
    let token=e.target.parentElement.parentElement.firstElementChild.innerHtml;
    console.log(token);
   /* let xhr = new XMLHttpRequest();
    let url='/questioncontroller.php/?token='+token;
    xhr.open('DELETE',url,true);
    xhr.onload=()=>{
        if(xhr.readyState===4||xhr.status===200)
        {
           console.log('question deleted');
            window.location.reload();
        }
        else
        {
            console.log('error occured');
            window.location.reload();
        }
    }
    xhr.send(null);*/
}