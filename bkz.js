class IdentificationHtmlModel1 
{ 
  constructor(setattributE,iD,idParent) {
    // Initialisation de la class
    this.setattributE=setattributE; // Demande le type de  l'element exemple  DIV vous aurais un element div
    this.iD = iD; // Demande l'identifiant id 
    this.idParent=idParent;// Vous pourvez ajouter un element dans un autre element si il n'est pas definis il sera ajoute a la fin du body     
    var node = document.createElement(setattributE);     
    if(this.idParent==undefined) // Lors que vous n'avais pas definis la variable il fais cette action variable parent
    {
      node.setAttribute("id",iD)  ;   
      document.body.appendChild(node);       
    }
    else 
    {
      node.setAttribute("id",iD)  ;    
      document.getElementById(this.idParent).appendChild(node);  
     }  
  }
                get idParent_()
                {
                    return this.idParent ; 
                    // retourne la valeur du parent                   
                }
                  set_attribute(type,valeur)
                {
                    document.getElementById(this.iD).setAttribute(type,valeur); 
                    // ajoute une valeur a l'element selectionné
                }
                get_attribute(atribute_)
                {          
                    var a = document.getElementById(this.iD);               
                    // retourne la valeur                            
                }
                set_text(val)
                {
                        document.getElementById(this.iD).innerHTML=val ;
                }
               get_text()
                {               
                        return   document.getElementById(this.iD).innerHTML ;
                }
}
// fin de la construction 
class IdentificationHtml extends IdentificationHtmlModel1 {   
    constructor(setattributE,iD,idParent) {
    super(setattributE,iD,idParent);  
  }
}
//var ok = new IdentificationHtml("button","Debut","up");
//ok.set_attribute("class","maClassokp") ; 
console.log("création de ndenga luvumbu Bokonzi") ;