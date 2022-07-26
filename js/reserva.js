
const routes_img=document.getElementById("routes_img_cars");
const img_top=document.getElementById("img_top");
const total=document.getElementById("total_amount");
const featureContainer=document.getElementById("item_list");
let labels;

if(routes_img.dataset.onenglish){
    labels=['Add','remove']
}else{
    labels=['Agregar','Quitar']
}





function changeImage(index) {
        if(index==0){
            img_top.src=routes_img.dataset.blue;
        }else if(index==1){
            img_top.src=routes_img.dataset.white;
        }else if(index==2){
            img_top.src=routes_img.dataset.red;
        }else if(index==3){
            img_top.src=routes_img.dataset.darkblue;
        }else{
            img_top.src=routes_img.dataset.yellow;
        }
}

function addFeature(id){
    const actualButton=document.getElementById(id)
    //!actualButton.outerText.localeCompare("Quitar")
    if(!actualButton.outerText.localeCompare(labels[1])){
        total.innerHTML=parseInt(total.outerText)-parseInt(actualButton.dataset.price);
        deleteDiv("new"+id)
        actualButton.innerHTML=labels[0];
        
    }else{
        total.innerHTML=parseInt(total.outerText)+parseInt(actualButton.dataset.price);
        addDiv("new"+id,actualButton.dataset.itemtitle, actualButton.dataset.price);
        actualButton.innerHTML=labels[1];

       
    }
}
function addDiv(new_element_id, text, price){
    
    const capa=
        `<div class="row justify-content-between" id="${new_element_id}">
            <div class="col-auto">
                <h5>${text}</h5>
            </div>
            <div class="col-auto">
                <h5>${price}</h5>
            </div>
        </div>`;
    featureContainer.innerHTML+=capa;  
}
function deleteDiv(id){
    document.getElementById(id).remove();
}

