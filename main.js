let calculate = () => {
    let answer = document.getElementById("answer");
    let length = parseInt(document.getElementById("length").options[document.getElementById("length").selectedIndex].value);
    let width = parseInt(document.getElementById("width").options[document.getElementById("width").selectedIndex].value);

    let area = length*width;
    let quantity = area/4;
   
    let rest = quantity;
    let eight = 0;
    let six = 0;
    
    while(rest!=0){
        if(rest%6==0 && rest<=12){
            six = rest/6;
            rest = 0;
            break;
        }
        else if(rest<6 ){
            six = six+1;
            rest = 0;
            break;
        }
        else if(rest==9 || rest==17){
            six = Math.ceil(rest/6);
            rest = 0;
            break;
        }
        else if(rest==7){
            console.log(rest);
            eight = eight+1;
            rest = 0;
            break;
        }
        
        eight = eight+1;
        rest = quantity - eight*8;

    }
    answer.innerHTML +="You will need " + eight +" packs of 8pcs, "+six+" packs of 6pcs";
    console.log("eight: " + eight + ", six: "+six);

}