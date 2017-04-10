var categorias_0=new Array("(PG) Prefecto General","(PM) Prefecto Mayor","(PP) Prefecto Principal","(PR) Prefecto","(OP) Oficial Principal","(OA) Oficial Ayudante","(OX) Oficial Auxiliar"); 
var categorias_1=new Array("(AM) Ayudante Mayor","(AP) Ayudante Principal","(AI) Ayudante de Primera","(AS) Ayudante de Segunda","(AT) Ayudante de Tercera","(CI) Cabo Primero","(CS) Cabo Segundo","(MO) Marinero"); 
	

function cambia_categoria(){ 

        //tomo el valor del select del jerarquia elegido 
        var jerarquia= document.form1.jerarquia[document.form1.jerarquia.selectedIndex].value; 
        //miro a ver si la jerarquia está definida
         
        if (jerarquia === "Personal Superior") { 
             num_categorias = categorias_0.length; 
             document.form1.categoria.length = num_categorias;
             for(i=0;i<num_categorias;i++){ 
                 document.form1.categoria.options[i].value=categorias_0[i]; 
                 document.form1.categoria.options[i].text=categorias_0[i]; 
             }  
        }else{ 
             num_categorias = categorias_1.length; 
             document.form1.categoria.length = num_categorias;
             for(i=0;i<num_categorias;i++){ 
                 document.form1.categoria.options[i].value=categorias_1[i]; 
                 document.form1.categoria.options[i].text=categorias_1[i]; 
             }
        }   
        document.form1.categoria.options[0].selected = true   
    }




