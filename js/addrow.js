function dubTest(){
   
      var count = $('.invoiceline').length;
      var item = $('.invoiceline:first').clone();
      // Beskrivelse kan ikke vælges med 'input' så 'textarea' bliver brugt her. -->
      item.find('textarea').eq(0).attr('name', 'Fakturadata[' + count +  '][Varenavn]');
      item.find('input').eq(0).attr('name', 'Fakturadata[' + count +  '][Varenummer]');
      item.find('input').eq(1).attr('name', 'Fakturadata[' + count +  '][antal]');
      item.find('input').eq(2).attr('name', 'Fakturadata[' + count +  '][Pris]');
      item.find('input').eq(3).attr('name', 'Fakturadata[' + count +  '][Kontering]');
      item.find('input').eq(4).attr('name', 'Fakturadata[' + count +  '][dimaccont]');
      item.find('select').eq(0).attr('name', 'Fakturadata[' + count +  '][ehf_vat]');
      item.find('input').eq(5).attr('name', 'Fakturadata[' + count +  '][Varebeloeb]');
      item.find('input').eq(6).attr('name', 'Fakturadata[' + count + '][Skaffevare]');
      item.find('input').eq(7).attr('name', 'Fakturadata[' + count +  '][Ordrefradrag]');
      item.find('input').eq(8).attr('name', 'Fakturadata[' + count + '][Momsfri]');
   
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
            