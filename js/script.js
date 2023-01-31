/*-------------------------menu hamburger-------------------------*/

let menu=document.getElementsByClassName("header")[0];//récupère le menu
let menuHamburger=menu.getElementsByClassName("iconHamburger")[0];
let iconeHamburger=menuHamburger.getElementsByTagName("img")[0];
let iconeCroix=menuHamburger.getElementsByTagName("img")[1];
let rubriques=menu.getElementsByClassName("site__header__menu")[0].getElementsByTagName("li");

function checkScreenWidth() {

    if (window.innerWidth < 992) {

        //état initial remis à 0 à chaque fois que la fenêtre passe en dessous de 992px
        let compteur=0;
        iconeHamburger.style.display="inline";
        iconeCroix.style.display="none";

        for(i=0;i<rubriques.length;i++){
            rubriques[i].style.display="none";
        }

        menuHamburger.addEventListener("click",function(){

            if(compteur%2==0){//l'utilisateur ouvre le menu hamburger
                iconeCroix.style.display="inline";
                iconeHamburger.style.display="none";

                for(i=0;i<rubriques.length;i++){
                    rubriques[i].getElementsByTagName("a")[0].style.width="100vw";
                    rubriques[i].style.display="block";
                    rubriques[i].style.border="1px solid #e8e8e8";
                }
            }

            else{//l'utilisateur ferme le menu hamburger
                iconeCroix.style.display="none";
                iconeHamburger.style.display="inline";

                for(i=0;i<rubriques.length;i++){
                    rubriques[i].style.display="none";
                }
            }

            compteur++;
        })
    }

    else{
        for(i=0;i<rubriques.length;i++){
            rubriques[i].style.display="block";
            rubriques[i].style.border="none";
            rubriques[i].getElementsByTagName("a")[0].style.width="unset";
        }
    }

}

  // Appeler la fonction lorsque la page est chargée
  window.onload = checkScreenWidth;
  
  // Appeler la fonction lorsque la taille de la fenêtre est modifiée
  window.onresize = checkScreenWidth;


/*-------------------------sous rubriques-------------------------*/

let rubriquesDeroulantes=menu.getElementsByClassName("site__header__menu")[0].getElementsByClassName("menu-item-has-children");

for(i=0;i<rubriquesDeroulantes.length;i++)
{
    rubriquesDeroulantes[i].querySelector("a").href = "javascript:void(0)";//désactive les rubriques déroulantes
    rubriquesDeroulantes[i].addEventListener("mouseover",function(){
        this.getElementsByClassName("sub-menu")[0].style.display="block";
    });

    rubriquesDeroulantes[i].addEventListener("mouseout",function(){
        this.getElementsByClassName("sub-menu")[0].style.display="none";
    });
}

/*-------------------------deroulants-------------------------*/

let deroulants=document.getElementsByClassName("deroulants__column__item__headband");
let deroulantsLength=deroulants.length;

if(deroulantsLength!=0){//s'il y a au moins un déroulant dans la page
    for(i=0;i<deroulantsLength;i++){
        let ouvert=false;

        deroulants[i].addEventListener("click", function(){
            let subContent=this.parentNode.getElementsByClassName("deroulants__column__item__subContent")[0];
            let open=this.getElementsByClassName("deroulants__column__item__headband__open")[0];
            let close=this.getElementsByClassName("deroulants__column__item__headband__close")[0];

            if(ouvert==false){
                subContent.style.visibility="visible";
                subContent.style.position="static";//remet l'élément dans le flux
                close.style.display="block";
                open.style.display="none";
                ouvert=true;
            }

            else if(ouvert==true){
                subContent.style.visibility="hidden";
                subContent.style.position="absolute";//remet l'élément hors du flux
                open.style.display="block";
                close.style.display="none";
                ouvert=false;
            }
        });
    }
}


