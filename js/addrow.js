function newrow(i){
     var count = i +1;
 
$("<label></label>",{
"for":"Ourinvoicelines_Beskrivelse",
"html" : "beskrivelse"
}).appendTo(".invoicelines");
$("<input></input",{
    "name" : "Ourinvoicelines["+ count+"][description]",
    "id" :"Ourinvoicelines_"+count+"_description",
    "type" : "text"
}).appendTo(".invoicelines");
$("<div></div>",{
    "class" : "errorMessage",
    "id" : "Ourinvoicelines_"+count+"_description_em_",
    "style" : "display:none"
}).appendTo(".invoicelines");
$("<label></lable",{
    "for" : "Ourinvoicelines_Antal",
    "html" : "Antal"
}).appendTo(".invoicelines")
$("<input></input>",{
    "name" : "Ourinvoicelines["+count+"][quantity]",
    "id" : "Ourinvoicelines_"+count+"_quantity", 
    "type" : "text",
    "maxlength" : "16",
    "value" : "0.00000000"   
}).appendTo(".invoicelines");
$("<div></div",{
    "class" : "errorMessage", 
    "id" :"Ourinvoicelines_"+count+"_quantity_em_", 
    "style":"display:none"
}).appendTo(".invoicelines");
$("<label></label>",{
    "for" : "Ourinvoicelines_Pris",
    "html" : "Pris"   
}).appendTo(".invoicelines");
$("<input></input>",{
    "name" : "Ourinvoicelines["+count+"][price]",
    "id" : "Ourinvoicelines_"+count+"_price",
    "type" : "text",
    "value" : "0.00000"
}).appendTo(".invoicelines")
$("<div></div>",{
    "class" : "errorMessage",
    "id" :"Ourinvoicelines_"+count+"_price_em_", 
    "style":"display:none"   
}).appendTo(".invoicelines");
$("<label></label>",{
    "for" : "Ourinvoicelines_moms",
    "html" : "Moms"   
}).appendTo(".invoicelines");
$("<input></input>",{
    "name" : "Ourinvoicelines["+count+"][vatyn]", 
    "id" :"Ourinvoicelines_"+count+"_vatyn",
    "type" : "text", 
    "maxlength" : "3", 
    "value" : "yes"
}).appendTo(".invoicelines");
$("<div></div>",{
    "class" : "errorMessage",
    "id" : "Ourinvoicelines_"+count+"_vatyn_em_",
    "style" : "display:none"
}).appendTo(".invoicelines");
$("<input></input>",{
    "onClick" : "deleterow()",
    "class" : "fancybutton remove",
    "name" : "yt0",
    "type" : "button",
    "value" : "-"
}).appendTo(".invoicelines");
$("<input></input>",{
    "onClick" : "newrow("+count+")",
    "class" : "fancybutton add",
    "name" : "yt0",
    "type" : "button",
    "value" : "+"
}).appendTo(".invoicelines");
}


function dubTest(){
   
      var count = $('.invoiceline').length;
      var name = 'Invoicelines['+(1+count)+'][itemnumber]'; 
      var id = 'Invoicelines_[' + (1+count) + ']_itembumber';    
      var item = $('.invoiceline:first').clone();
      
      
      item.find('input:first').attr('id', id);
      item.find('input:first').attr('name', name);
      item.find('label:first').attr('for', 'Invoicelines_Beskrivelse')
          .html('Beskrivelse');
      item.appendTo('.invoicelines');
 
    
}

function deleterow(){
   $(this).parent().remove(); 
}

         
        //    
       
       
       
       
       
   //    "html" : '<label for="Ourinvoicelines_Beskrivelse">Beskrivelse</label>\n\
     //            <input name="Ourinvoicelines['+ count +'][description]" \n\
     //            id="Ourinvoicelines_1_description" type="text">            \n\
     //            <div class="errorMessage" id="Ourinvoicelines_'+ count +'_description_em_"style="display:none"></div>            \n\
     //            <input onclick="deleterow()" class="fancybutton" id="additem" style="background: #CC0008; padding:2px 4px; width:20px; display:inline-block;" name="yt0" type="button" value="-">\n\
      //           <input onclick="newrow('+count+')" class="fancybutton" style="background: #23B110; padding:2px 4px; width:20px; display:inline-block;" name="yt1" type="button" value="+">        \n\
      //           </div>'    
            