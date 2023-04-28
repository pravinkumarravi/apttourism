
var disableddates=[];
function yacalpakone(rate){
    var rate=rate;
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
                    
                    disableddates.push(data1[i]);
                    
                }
               
  
            changeCalendar(disableddates);
          }
        });
}

function changeCalendar(disableddates){
    var date = new Date();
    //alert(date);
    var currentMonth = (date.getMonth());
    var nextMonth = (date.getMonth() + 1);
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();
    $('#ttdCalendar').yacal({
      date: new Date(currentYear, nextMonth, currentDate),
      minDate: new Date(currentYear, currentMonth, currentDate),
      nearMonths: 1,
      isActive: DisableSpecificDates
    
    });
    
    $('#ttdCalendarmobile').yacal({
      date: new Date(currentYear, currentMonth, currentDate),
      minDate: new Date(currentYear, currentMonth, currentDate),
      nearMonths: 0,
      isActive: DisableSpecificDates
    
    });
    
    
    $('.day.active').on('click',function (event) {
      event.preventDefault();
      console.log(new Date($(this).data('time')));
      var date=new Date($(this).data('time'));
      var date1=date.getDate();
      var month=date.getMonth()+1;
      var year=date.getFullYear();
      
      var dmy=date1+'-'+month+'-'+year;
      
      document.getElementById("JourneyDate").value=dmy;
      $("#ttdCalendar").hide();
    });
    
    function DisableSpecificDates(date){
    var string = formatDate(date);
    var isDisabled = (jQuery.inArray(string, disableddates) != -1);
    if(isDisabled){
      return false;
    }else{
      return true;
    }
    //return [!isDisabled];
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