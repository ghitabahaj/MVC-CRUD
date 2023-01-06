function showinfo(id){
    document.getElementById("joke-id-update").value=id;
    document.getElementById("joke-text-update").value=document.getElementById(id).getAttribute("text");
}