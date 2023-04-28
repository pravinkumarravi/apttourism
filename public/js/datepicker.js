
$(function() {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();
    var disableddatesdate = [];
    $(document).ready(function(){
        var rate=$('#ticket_type:checked').val();
        //alert(rate);
        $.ajax({
              type:'POST',
              url:"getEventList.php",
              data:
              {
                rate:rate
              },
              success: function(data){
                var data1=data.split(',');
                for(var i = 0;i<data1.length;i++) {
                        
                        disableddatesdate.push(data1[i]);
                        
                    }
                   
      
                changeCalendar(disableddatesdate);
              }
            });
    });
    $('#datepicker').datepicker({
    minDate: new Date(currentYear, currentMonth, currentDate)
    });
    
      $("#datepicker").datepicker("destroy");
    
    
      function changeCalendar(disableddatesdate)
      {
        var date = new Date();
        var currentMonth = date.getMonth();
        var currentDate = date.getDate();
        var currentYear = date.getFullYear();
        $("#datepicker").datepicker({
          minDate: 0,
          maxDate: "+90D",
          dateFormat: "dd-mm-yy",
          beforeShowDay : DisableSpecificDates
        });
    
        $("#datepicker").on("change",function(){
            var selected = $(this).val();
           document.getElementById("JourneyDate").value=selected;
           $("#datepicker").hide();
        });
    
        function DisableSpecificDates(date){
          //var day = date.getDay();
          var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
          var isDisabled = (jQuery.inArray(string, disableddatesdate) != -1);
          return [!isDisabled];
        }
    
        function formatDate(date) {
           var d = new Date(date),
             month = '' + (d.getMonth() + 1),
             day = '' + d.getDate(),
             year = d.getFullYear();
    
           if (month.length < 2) month = '0' + month;
           if (day.length < 2) day = '0' + day;
    
           return [day, month, year].join('-');
         }
      }
        
        
    });
    
    