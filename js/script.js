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
            rubriques[i].style.display="unset";
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