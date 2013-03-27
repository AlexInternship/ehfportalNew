function dubTest(){
   
      var count = $('.invoiceline').length;
      var actuallCount = count +1; 
      var item = $('.invoiceline:first').clone();
  
      // element 1
      item.find('input').eq(0).attr('id', 'Fakturadata[' + (actuallCount) + '][momsfri]');
      item.find('input').eq(0).attr('name', 'Fakturadata['+(actuallCount)+'][momsfri]');
      
      // element 2
      item.find('input').eq(1).attr('id', 'Fakturadata['+(actuallCount)+'][antal]');
      item.find('input').eq(1).attr('name', 'Fakturadata['+(actuallCount)+'][antal]');

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
            