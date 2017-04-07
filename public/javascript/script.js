var lista_1=new Array("(PG) Prefecto General","(PM) Prefecto Mayor","(PP) Prefecto Principal","(PR) Prefecto","(OP) Oficial Principal","(OA) Oficial Ayudante","(OX) Oficial Auxiliar") 
var lista_2=new Array("(AM) Ayudante Mayor","(AP) Ayudante Principal","(AI) Ayudante de Primera","(AS) Ayudante de Segunda","(AT) Ayudante de Tercera","(CI) Cabo Primero","(CS) Cabo Segundo","(MO) Marinero") 
	
function cambia_categoria(){ 
         var indice_jerarquia = document.f1.jerarquia[document.form1.jerarquia.selectedIndex].value 
         //miro a ver si el pais está definido 
         if (indice_jerarquia != 0) { 
             //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
             //selecciono el array de provincia adecuado 
             categoria = eval("lista_" + indice_jerarquia)
             //calculo el numero de provincias 
             categoria_length = categoria.length 
             //marco el número de provincias en el select 
             document.form1.categoria.length = categoria_length 
             //para cada provincia del array, la introduzco en el select 
             for(i=0;i<categoria_length;i++){ 
                document.form1.categoria.options[i].value=categoria[i] 
                document.form1.categoria.options[i].text=categoria[i] 
             } 
         }else{ 
             //si no había provincia seleccionada, elimino las provincias del select 
             document.form1.categoria.length = 1 
             //coloco un guión en la única opción que he dejado 
             document.form1.categoria.options[0].value = "-" 
             document.form1.categoria.options[0].text = "-" 
         } 
         //marco como seleccionada la opción primera de provincia 
         document.form1.categoria.options[0].selected = true 
   }



