const image_input= document.querySelector("#upload-button");
var upload="";

image_input.addEventListener("change",function(){
    const reader= new FileReader;
    reader.addEventListener('lopad',() =>{
        upload=reader.result;
        document.querySelector("#chosen-image").src='url(${upload})';
    });
    reader.readAsDataURL(this.files[0]);
   

})