let uploadButton= document.getElementById("upload-button");
let chosenImage = document.getElementById("chosen-image");

uploadButton.onChange=() => {

    let reader = new FileReader();
    reader.readAsDataURL(uploadButton.files[0]);
    console.log(uploadButton.files[0]);
    reader.onload=() =>{
        chosenImage.setAttribute("src",reader.result);
    }
    

}