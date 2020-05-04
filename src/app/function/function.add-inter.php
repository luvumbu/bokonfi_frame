<div class="flex-b">
    <div   class="none" id="SAV_" >
    SAV  <i  class="fa fa-remove" onclick="remove(this)" id="SAV"></i>
    </div>
    <div   class="none" id="AERIEN_" >
    AERIEN <i  onclick="remove(this)" id="AERIEN" class="fa fa-remove" ></i>
    </div>
    <div   class="none" id="FACADE_">
    FACADE <i  onclick="remove(this)" id="FACADE" class="fa fa-remove" ></i>
    </div>
    <div   class="none"  id="SOUS_TERRAIN_">
    SOUS_TERRAIN <i onclick="remove(this)" id="SOUS_TERRAIN"  class="fa fa-remove" ></i>
    </div>
 
    <div   class="none"  id="IMMEUBLE_">
    IMMEUBLE <i  onclick="remove(this)" id="IMMEUBLE" class="fa fa-remove" ></i>
    </div>
    <div   class="none"  id="PLP_">
    PLP <i  onclick="remove(this)" id="PLP" class="fa fa-remove" ></i>
    </div>
    <div   class="none"  id="FACADE_">
    FACADE<i onclick="remove(this)" id="FACADE"  class="fa fa-remove" ></i>
    </div>

    <div  class="none" id="COMPLEXE_">
    COMPLEXE<i  class="fa fa-remove" onclick="remove(this)" id="COMPLEXE"  ></i>
    </div>
    <div    id="SAV_INSTALL_" class="none" >
    SAV_INSTALL<i  class="fa fa-remove" onclick="remove(this)" id="SAV_INSTALL" ></i>
    </div>
    <div id="BINOME_" class="none" >
    <input type="text" placeholder="Binome" id="BINOME"><i   class="fa fa-remove"  onclick="remove(this)" id="BINOME"  ></i>
    </div>

 
 
</div>
<!-- 




 -->


<div style="margin-bottom:50px" id="all-selection"></div>
<div class="flex-b">
    <label  for="date" style="color:black ;">Date</label><input type="date"  style="color:black ;" id="date" class="nd">
   <br/><label for="">ND : </label> <input type="number" id="ND"  class="nd" placeholder="ND">
</div>
<div class="flex-b">
    <label for="">Interventions</label>
<select id="intervention" onchange="intervention(this)">
<option value="-- --" >-- --</option>
  <option value="SAV">SAV</option>
  <option value="AERIEN">AERIEN</option>
  <option value="FACADE">FACADE</option>
  <option value="SOUS_TERRAIN">SOUS_TERRAIN</option>
  <option value="IMMEUBLE">IMMEUBLE</option>
  <option value="PLP">PLP</option>
  
 
</select>
</div>

<div class="flex-b2">
    <div>
    <!-- <label for="">
        Ajouter 
    </label>
    </div>
    <div>
<i class="fa fa-plus-circle"></i> -->

<div id="select-plus">
PLUS <i class="fa fa-plus-circle"></i> 
<select id="intervention"  onchange="intervention(this)">

<option value="-- --" >-- --</option>
    <option value="COMPLEXE">COMPLEXE</option>
    <option value="BINOME">BINOME</option>
    <option value="SAV_INSTALL">SAV POUR INSTALLATION EQUIPEMENT</option>
 </select>
</div>
<div class="valider" onclick="send_inter()">
    Valider
</div>
</div>


</div> 

</div>

<style>
 
 .nd 
 {
     width : 80% ; 
     margin:  auto ; 
     padding: 15px; 
 }
 #intervention 
 {
   
     padding: 15px; 
     width: 70% ; 
     margin: auto ; 
     border : 1px solid rgba(0,0,0,0) ; 
     border-bottom: 3px solid   #4eabca ;    
 }

 .valider:hover 
 {
     cursor: pointer ; 
 }  
 .on 
 {
     margin-bottom : 15px; 
     margin-top: 15px; 
 }
.valider 
{
    margin-top : 50px; 
    background-color: #4eabca ; 
    color : white ; 
    padding: 15px; 
}
 .flex-b
 {
     text-align: center ;

 }
 .fa-remove  
 {
color : red; 
text-shadow: 1px 1px black ; 
 }
 .fa-remove:hover 
 {
     cursor : pointer ; 
 }  
 .color-b 
 {
    background-color: #ecfaff ; 
    color:red ;
    text-shadow: 1px 1px black ;  
    
 }
 .selects 
 {
     padding: 15px; 
     
 
 }
 input 
 {
     border : 1px solid rgba(0,0,0,0) ; 
     border-bottom : 3px solid #4eabca;
     border-radius: 15px; 
 }
 .flex-b2 
  {
     
      
      text-align: center ; 
      width: 70% ; 
      justify-content: space-around ; 
      margin: auto ; 
      display: flex ; 
      margin-top : 25px; 
  } 
</style>

