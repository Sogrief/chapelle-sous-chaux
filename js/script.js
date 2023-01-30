/*-------------------------menu hamburger-------------------------*/

let menu=document.getElementsByClassName("header")[0];//récupère le menu

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