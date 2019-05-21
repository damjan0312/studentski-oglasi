
let form=document.getElementById('upload');
var request=new XMLHttpRequest();

form.addEventListener('submit',(e)=>
{
    e.preventDefault();
    let formdata=new FormData(form);

    request.open('post','/upload');
    request.addEventListener("load",transferComplete);
    request.send(formdata);
});

function transferComplete(data)
{
  console.log(data.currentTarget.response);
}
