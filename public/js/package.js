$(function()
 {
    
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;
        $("#JourneyDate").attr('min', maxDate);
});


function fnDrawtable(arg)
{
    
    var ticket_type=$("#ticket_type:checked").val();
    document.getElementById("priceless").value=arg;
    var ppay=$("#price:checked").val();
    document.getElementById("full_amount").value=ppay;
    document.getElementById("fullamount").value=ppay;
    
    if(ticket_type=="300" || ticket_type=="500")
    {
        var amnt=parseInt(ppay) / parseInt(2);
        
        $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amnt );
        $( "#paymentcost2" ).text("Full Payment Cost Rs:"+ppay);
        
        
    }else if(ticket_type=="1000")
    {
        var amnt=parseInt(ppay) / parseInt(3);
       
        $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amnt );
        $( "#paymentcost2" ).text("Full Payment Cost Rs:"+ppay);
        
    }
    
    
    $("#perdetail").text("No Of Persons:"+arg);
    $("#custTable").show();
    $("#MainTable tbody").html("");
    for (var cnt = 1; cnt <= arg; cnt++) {
      var rowValue = "<tr>";
      rowValue = rowValue + '<td class="center">' + cnt + '</td>';
      rowValue = rowValue + '<td><div class="form-group"><input required="required" id="Name' +
                                cnt +
                                '" name="Name[]" type="text" class="form-control col-md-3" placeholder="Name"></div></td>';
      rowValue = rowValue + '<td><div class="form-group"><input required="required" id="Age' +
                                cnt +
                                '" name="Age[]" type="text" onkeypress="return isNumber(event)" onchange="checkNumber(this)" class="form-control age1" placeholder="Age"></div></td>';
      rowValue = rowValue + '<td><div class="form-group"><select required="required" id="Gender' +
                                cnt +
                                '"  name="Gender[]" class="form-control gender"><option value="Male">Male</option><option value="Female">Female</option></select></div></td>';
      //rowValue = rowValue + '<td><div class="form-group"><select required="required" id="Proof'+cnt+'"  name="Proof[]" class="form-control"><option value="Aadhaar Card">Aadhaar Card</option><option value="Passport">Passport</option><option value="Ration Card">Ration Card</option><option value="Driving License">Driving License</option><option value="Pan Card">Pan Card</option><option value="Voter ID">Voter ID</option><option value="School / College Identify Card">School / College Identity Card</option></select></div></td>';
      rowValue = rowValue + '<td><div class="form-group"><select required="required" id="Proof' +
                                cnt +
                                '"  name="Proof[]" class="form-control proof"><option value="Aadhaar Card">Aadhaar Card</option><option value="Passport Number">Passport Number</option><option value="Voter Id">Voter Id</option><option value="School Id">School Id</option></select></div></td>';
      rowValue = rowValue + '<td><div class="form-group"><input required="required" id="ProofNo' +
                                cnt +
                                '"  type="text" class="form-control" name="ProofNo[]" placeholder="Proof No"></div></td>';
                            rowValue = rowValue + '</tr>';
      $("#MainTable tbody").append(rowValue);
    
    }
            
}

$('#Continue').on('click',function()
{
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    var jdate=$("#JourneyDate").val();
    var perprice=$('#priceless').val();
    
    $("#selectdate").text("Selected date:"+jdate);
    
    var JourneyDate=$("#JourneyDate").val();
    var time=$("#time").val();
    var Email=$("#Email").val();
    var address=$("#address").val();
    var MobileNo=$("#MobileNo").val();
    var optMobileNo=$("#optMobileNo").val();
    
    var Tickets=$("#Tickets").val();
    var cname=$("#cname").val();
    if(cname=="")
    {
        alert("Enter Name");
        return false;
    }
    if(JourneyDate=="")
    {
      alert("Date must be filled out");
      return false;
    }
    if(Tickets=="")
    {
        alert("Tickets must be filled out");
        return false;
    }
    if(Tickets=="")
    {
        alert("Tickets must be filled out");
        return false;
    }
    if(time=="")
    {
        alert("Time must be filled out");
        return false;
    }
    if(Email=="")
    {
        alert("Email must be filled out");
        return false;
    }
    if(address=="")
    {
        alert("Address must be filled out");
        return false;
    }
    if(MobileNo=="")
    {
        alert("MobileNo must be filled out");
        return false;
    }
    
            changehref1();
            
});


function changehref1()
{
    
    var oldUrl = $("#two").attr("href"); 
    // Get current url
    var newUrl = oldUrl.replace("#", "#step2"); // Create new url
    $("#two").attr("href", newUrl); // Set herf value
}
$('#second').on('click',function()
    {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    
    var price=$('#price:checked').val();
    
    
    if($('input[name="price"]:checked').length ==0)
    {
    alert("Please select the package amount");
     return false;
    
    }else
    {
     $.ajax({
    type:'post',
    url:'pricedetail.php',
    data:
    {
    price:price,
    },
    success:function(msg)
    {
    console.log(msg);
    var data=msg;
    //document.getElementById("car_pack").value=data;
    $("#car_pack").text("You Have Selected Car:"+data);
    document.getElementById("carrr_pack").value=data;
    getpickcharge(data);
    }
    });
    changehref();
    var ticketamount=$('#ticket_type:checked').val();
    //alert(ticketamount);
    yacalpakone(ticketamount);
    return true;
    }
            
});


function changehref()
{
    
    var oldUrl = $("#one").attr("href"); 
    // Get current url
    var newUrl = oldUrl.replace("#step1", "#step1"); // Create new url
    $("#one").attr("href", newUrl); // Set herf value
    
    
}

function getpickcharge(data)
{
    
    var id=data;
    //gettemple(id);
    var carname=data;
    var car=document.getElementById("pickup_chargeamnt");
    $.ajax({
        type:'post',
    url:'pricedetail.php',
    data:
    {
    car:carname,
    },
    success:function(msg)
    {
        console.log(msg);
        $("#citis_container").html(msg);
    }
    })
}

function gettemple(data)
{
    
    var pack=data;
    $.ajax({
        type:'post',
    url:'pricedetail.php',
    data:
    {
    pack:pack,
    },
    success:function(msg)
    {
        console.log(msg);
        $(".chbx").html(msg);
    }
    })
}

function pickuptimecharges(rate)
{
  
    var rate=rate;
    
    document.getElementById("pickuptimechargesrate").value=rate;
    var pick_idrate=document.getElementById("pick_idrate").value;
    
    var fullamount=document.getElementById("full_amount").value;
    
    var pipntvalueamntrate=document.getElementById("pipntvalueamntrate").value;
    
    var pppay=$("#pay_ladd").val();
    
    var laddus=$("#laddus option:selected").val();
    
    var packagefood=$("#packagefood").val();

    var tempackage=$("#tempac").val();

    if(tempackage=="")
    {
        var tem_package=0;
    }else
    {
        var tem_package=tempackage;
    }
    if(packagefood=="")
    {
        var package_food=0;
    }
    else
    {
        var package_food=packagefood;
    }
    if(laddus=="")
    {
        var payprice=0;
    }else
    {
        var payprice=pppay;
    }
    if(pipntvalueamntrate=="")
    {
        var pipntvalueamntratess=0;
    }else
    {
        var pipntvalueamntratess=pipntvalueamntrate;
    }
    if(pick_idrate=="")
    {
        var pick_idrates=0;
        
    }else
    {
        var pick_idrates=pick_idrate;
        
    }
    var amount=parseInt(fullamount)+parseInt(rate)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice)+parseInt(package_food)+parseInt(tem_package);
    
    document.getElementById("fullamount").value=parseInt(amount);
    $( "#paymentcost2" ).text("Full Payment Cost Rs:"+amount);
    $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);


 }
 
 
 function pickuptimecharges1(rate)
{
   
    var rates=rate;
    document.getElementById("pickuptimechargesrate").value=rates;
    var pickuptimechargesrate=$("#pickuptimechargesrate").val();
    
    var fullamount=document.getElementById("full_amount").value;
    var pick_idrate=document.getElementById("pick_idrate").value;
    var pipntvalueamntrate=document.getElementById("pipntvalueamntrate").value;
    var laddus=$("#laddus option:selected").val();
    var pppay=$("#pay_ladd").val();
    var packagefood=$("#packagefood").val();

    var tempackage=$("#tempac").val();

    if(tempackage=="")
    {
        var tem_package=0;
    }else
    {
        var tem_package=tempackage;
    }
    if(packagefood=="")
    {
        var package_food=0;
    }
    else
    {
        var package_food=packagefood;
    }
    if(laddus=="")
    {
        var payprice=0;
    }else
    {
        var payprice=pppay;
    }
    
    if(pick_idrate=="")
    {
        var pickidrate=0;
    }
    else
    {
        var pickidrate=pick_idrate;
    }
    
    if(pipntvalueamntrate=="")
    {
        var pipntvalueamntratess=0;
    }else
    {
        var pipntvalueamntratess=pipntvalueamntrate;
    }
    if(pickuptimechargesrate=="")
    {
        var amount=parseInt(fullamount)+parseInt(pickidrate)+parseInt(pipntvalueamntratess)+parseInt(payprice)+parseInt(package_food)+parseInt(tem_package);
        
        document.getElementById("fullamount").value=parseInt(amount)
        $( "#paymentcost2" ).text("Full Payment Cost Rs:"+amount);
        $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);
    }else
    {
        var amount=parseInt(fullamount)+parseInt(pickidrate)+parseInt(pipntvalueamntratess)+parseInt(payprice)+parseInt(package_food)+parseInt(tem_package);;
        
        document.getElementById("fullamount").value=amount;
        $( "#paymentcost2" ).text("Full Payment Cost Rs:"+amount);
        $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);
    }
            
            
            


 }
 


function nofood()
{
    $("#chfoodvalue").hide();
    var priceless=$("#priceless").val();
    var amntprice=parseInt(priceless) * parseInt(200);
    document.getElementById("packagefood").value=amntprice;
    var ppay=$("#price:checked").val();
   
    var pick_idrate=document.getElementById("pick_idrate").value;
    
    var fullamount=document.getElementById("full_amount").value;
    
    var pipntvalueamntrate=document.getElementById("pipntvalueamntrate").value;
    
    var pppay=$("#pay_ladd").val();
    
    var laddus=$("#laddus option:selected").val();
    var pickuptimechargesrate=$("#pickuptimechargesrate").val();
    var tempackage=$("#tempac").val();

    if(tempackage=="")
    {
        var tem_package=0;
    }else
    {
        var tem_package=tempackage;
    }
    
    if(pickuptimechargesrate=="")
    {
        var pickuptimechargesrates=0;
    }else
    {
        var pickuptimechargesrates=pickuptimechargesrate;
    }
    
    if(laddus=="")
    {
        var payprice=0;
    }else
    {
        var payprice=pppay;
    }
    if(pipntvalueamntrate=="")
    {
        var pipntvalueamntratess=0;
    }else
    {
        var pipntvalueamntratess=pipntvalueamntrate;
    }
    if(pick_idrate=="")
    {
        var pick_idrates=0;
        
    }else
    {
        var pick_idrates=pick_idrate;
        
    }
    var amount=parseInt(fullamount)+parseInt(pickuptimechargesrates)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice)-parseInt(amntprice)+parseInt(tem_package);
    
    document.getElementById("fullamount").value=parseInt(amount);
    $( "#paymentcost2" ).text("Full Payment Cost Rs:"+amount);
    $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);
    
}

function withfood()
{
    
    $("#chfoodvalue").show();
    var amntprice=0;
    var ppay=$("#price:checked").val();
   
    var pick_idrate=document.getElementById("pick_idrate").value;
    
    var fullamount=document.getElementById("full_amount").value;
    
    var pipntvalueamntrate=document.getElementById("pipntvalueamntrate").value;
    
    var pppay=$("#pay_ladd").val();
    
    var laddus=$("#laddus option:selected").val();
    var pickuptimechargesrate=$("#pickuptimechargesrate").val();
    var tempackage=$("#tempac").val();

    if(tempackage=="")
    {
        var tem_package=0;
    }else
    {
        var tem_package=tempackage;
    }
    
    if(pickuptimechargesrate=="")
    {
        var pickuptimechargesrates=0;
    }else
    {
        var pickuptimechargesrates=pickuptimechargesrate;
    }
    
    if(laddus=="")
    {
        var payprice=0;
    }else
    {
        var payprice=pppay;
    }
    if(pipntvalueamntrate=="")
    {
        var pipntvalueamntratess=0;
    }else
    {
        var pipntvalueamntratess=pipntvalueamntrate;
    }
    if(pick_idrate=="")
    {
        var pick_idrates=0;
        
    }else
    {
        var pick_idrates=pick_idrate;
        
    }
    var amount=parseInt(fullamount)+parseInt(pickuptimechargesrates)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice)+parseInt(amntprice)+parseInt(tem_package);
    
    document.getElementById("fullamount").value=parseInt(amount);
    $( "#paymentcost2" ).text("Full Payment Cost Rs:"+amount);
    $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);
}


function withfoodchildren(amnt)
{
    var amnt=amnt;
    document.getElementById("packagefood").value=amnt;
    var ppay=$("#price:checked").val();
   
    var pick_idrate=document.getElementById("pick_idrate").value;
    
    var fullamount=document.getElementById("full_amount").value;
    
    var pipntvalueamntrate=document.getElementById("pipntvalueamntrate").value;
    
    var pppay=$("#pay_ladd").val();
    
    var laddus=$("#laddus option:selected").val();
    var pickuptimechargesrate=$("#pickuptimechargesrate").val();
    var tempackage=$("#tempac").val();

    if(tempackage=="")
    {
        var tem_package=0;
    }else
    {
        var tem_package=tempackage;
    }
    if(pickuptimechargesrate=="")
    {
        var pickuptimechargesrates=0;
    }else
    {
        var pickuptimechargesrates=pickuptimechargesrate;
    }
    
    if(laddus=="")
    {
        var payprice=0;
    }else
    {
        var payprice=pppay;
    }
    if(pipntvalueamntrate=="")
    {
        var pipntvalueamntratess=0;
    }else
    {
        var pipntvalueamntratess=pipntvalueamntrate;
    }
    if(pick_idrate=="")
    {
        var pick_idrates=0;
        
    }else
    {
        var pick_idrates=pick_idrate;
        
    }
    var amount=parseInt(fullamount)+parseInt(pickuptimechargesrates)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice)+parseInt(amnt)+parseInt(tem_package);
    
    document.getElementById("fullamount").value=parseInt(amount);
    $( "#paymentcost2" ).text("Full Payment Cost Rs:"+amount);
    $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);
    
}

function free()
{
    $("#pipntvalue").hide();
    
    var pick_idrate=document.getElementById("pick_idrate").value;
    
    var fullamount=document.getElementById("full_amount").value;
    
    
    document.getElementById("pipntvalueamntrate").value="";
    var pipntvalueamntrate=document.getElementById("pipntvalueamntrate").value;
    var pppay=$("#pay_ladd").val();
    
    var laddus=$("#laddus option:selected").val();
    var pickuptimechargesrate=$("#pickuptimechargesrate").val();
    var food=$("#wfood:checked").val();
    var packagefood=$("#packagefood").val();
    var tempackage=$("#tempac").val();

    if(tempackage=="")
    {
        var tem_package=0;
    }else
    {
        var tem_package=tempackage;
    }
        if(packagefood=="")
        {
            var package_food=0;
        }
        else
        {
            var package_food=packagefood;
        }
   
    
    
    if(pickuptimechargesrate=="")
    {
        var pickuptimechargesrates=0;
    }else
    {
        var pickuptimechargesrates=pickuptimechargesrate;
    }
    
    if(laddus=="")
    {
        var payprice=0;
    }else
    {
        var payprice=pppay;
    }
    if(pipntvalueamntrate=="")
    {
        var pipntvalueamntratess=0;
    }else
    {
        var pipntvalueamntratess=pipntvalueamntrate;
    }
    if(pick_idrate=="")
    {
        var pick_idrates=0;
        
    }else
    {
        var pick_idrates=pick_idrate;
        
    }
    if(food=="No Food")
    {
        
    var amount=parseInt(fullamount)+parseInt(pickuptimechargesrates)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice)-parseInt(package_food)+parseInt(tem_package);
    }else
    {
        var amount=parseInt(fullamount)+parseInt(pickuptimechargesrates)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice)+parseInt(package_food)+parseInt(tem_package);
    }
    document.getElementById("fullamount").value=parseInt(amount);
    $( "#paymentcost2" ).text("Full Payment Cost Rs:"+amount);
    $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);
    
    
}


function kms()
{
    $("#pipntvalue").show();
}

function pipntvalueamnt(amount)
{
    
     var pipntvalueamntt=amount;
    document.getElementById("pipntvalueamntrate").value=amount;
    var pipntvalueamntrate=document.getElementById("pipntvalueamntrate").value;
    
    var fullamount=$("#full_amount").val();
    
    var pickuptimechargesrate=document.getElementById("pickuptimechargesrate").value;
    var pick_idrate=document.getElementById("pick_idrate").value;
    var pppay=$("#pay_ladd").val();
    var laddus=$("#laddus option:selected").val();
    var food=$("#wfood:checked").val();
    var packagefood=$("#packagefood").val();
    var tempackage=$("#tempac").val();

    if(tempackage=="")
    {
        var tem_package=0;
    }else
    {
        var tem_package=tempackage;
    }
    if(packagefood=="")
    {
        var package_food=0;
    }
    else
    {
        var package_food=packagefood;
    }
    if(laddus=="")
    {
        var payprice=0;
    }else
    {
        var payprice=pppay;
    }
    if(pickuptimechargesrate=="")
    {
        var pickuptimechargesratess=0;
    }else
    {
        var pickuptimechargesratess=pickuptimechargesrate;
    }
    if(pick_idrate=="")
    {
        var pick_idrates=0;
    }else
    {
        var pick_idrates=pick_idrate;
    }
    if(food=="No Food")
    {
        
    var amount=parseInt(fullamount)+parseInt(pickuptimechargesratess)+parseInt(pick_idrates)+parseInt(pipntvalueamntrate)+parseInt(payprice)-parseInt(package_food)+parseInt(tem_package);
    }else
    {
        var amount=parseInt(fullamount)+parseInt(pickuptimechargesratess)+parseInt(pick_idrates)+parseInt(pipntvalueamntrate)+parseInt(payprice)+parseInt(package_food)+parseInt(tem_package);
    }
//var amount=parseInt(fullamount)+parseInt(pick_idrates)+parseInt(pickuptimechargesratess)+parseInt(pipntvalueamntrate)+parseInt(payprice);
     document.getElementById("fullamount").value=parseInt(amount);
    $( "#paymentcost2" ).text("Full Payment Cost Rs:"+amount);
    $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);
   
}

function extraladdus(rate,price)
{
    var ladduprice=price;
    var ladd_price=parseInt(ladduprice)*parseInt(rate);
    
    var payyprice=$("#pay_ladd").val(ladd_price);
    var laddus=$("#laddus option:selected").val();
    var pppay=$("#pay_ladd").val();
    
    
    var pick_idrate=document.getElementById("pick_idrate").value;
    
    var pickuptimechargesrate=document.getElementById("pickuptimechargesrate").value;
    
    var fullamount=document.getElementById("full_amount").value;
    
    var pipntvalueamntrate=document.getElementById("pipntvalueamntrate").value;
    var food=$("#wfood:checked").val();
    var packagefood=$("#packagefood").val();
    var tempackage=$("#tempac").val();

    if(tempackage=="")
    {
        var tem_package=0;
    }else
    {
        var tem_package=tempackage;
    }
    if(packagefood=="")
    {
        var package_food=0;
    }
    else
    {
        var package_food=packagefood;
    }
    
    if(pickuptimechargesrate=="")
    {
        var pickuptimechargesratess=0;
    }else
    {
        var pickuptimechargesratess=pickuptimechargesrate;
    }
    if(laddus=="")
    {
        var payprice=0;
    }else
    {
        var payprice=pppay;
    }
    if(pipntvalueamntrate=="")
    {
        var pipntvalueamntratess=0;
    }else
    {
        var pipntvalueamntratess=pipntvalueamntrate;
    }
    if(pick_idrate=="")
    {
        var pick_idrates=0;
        
    }else
    {
        var pick_idrates=pick_idrate;
        
    }
    
    if(food=="No Food")
    {
        
    var amount=parseInt(fullamount)+parseInt(pickuptimechargesratess)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice)-parseInt(package_food)+parseInt(tem_package);
    }else
    {
        var amount=parseInt(fullamount)+parseInt(pickuptimechargesratess)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice)+parseInt(package_food)+parseInt(tem_package);
    }
    //var amount=parseInt(fullamount)+parseInt(pickuptimechargesratess)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice);
    document.getElementById("fullamount").value=parseInt(amount);
    $( "#paymentcost2" ).text("Full Payment Cost Rs:"+amount);
    $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);
    

}

function getpickup_chargeamnt(value)
{
    var pickrate=$("#pickup_chargeamnt").val();
    $.ajax({
    type:'post',
    url:'getpickup_chargeamnt.php',
    data:
     {
        pickrate:pickrate
     },
     success:function(msg)
     {
             document.getElementById("pick_idrate").value=msg;
             var pick_idrate=document.getElementById("pick_idrate").value;
             var pickuptimechargesrate=document.getElementById("pickuptimechargesrate").value;
             var fullamount=document.getElementById("full_amount").value;
             var pipntvalueamntrate=document.getElementById("pipntvalueamntrate").value;
             var food=$("#wfood:checked").val();
            var packagefood=$("#packagefood").val();
            var laddus=$("#laddus option:selected").val();
            var pppay=$("#pay_ladd").val();
            var tempackage=$("#tempac").val();

    if(tempackage=="")
    {
        var tem_package=0;
    }else
    {
        var tem_package=tempackage;
    }
            if(packagefood=="")
            {
                var package_food=0;
            }
            else
            {
                var package_food=packagefood;
            }
            if(laddus=="")
            {
                var payprice=0;
            }else
            {
                var payprice=pppay;
            }
             if(pipntvalueamntrate=="")
            {
                var pipntvalueamntratess=0;
            }else
            {
                var pipntvalueamntratess=pipntvalueamntrate;
            }
            if(pickuptimechargesrate=="")
            {
                var pickuptimechargesratess=0;
            }else
            {
                var pickuptimechargesratess=pickuptimechargesrate;
            }
            if(food=="No Food")
            {
                
            var amount=parseInt(fullamount)+parseInt(pickuptimechargesratess)+parseInt(pick_idrate)+parseInt(pipntvalueamntratess)+parseInt(payprice)-parseInt(package_food)+parseInt(tem_package);
            }else
            {
                var amount=parseInt(fullamount)+parseInt(pickuptimechargesratess)+parseInt(pick_idrate)+parseInt(pipntvalueamntratess)+parseInt(payprice)+parseInt(package_food)+parseInt(tem_package);
            }
            document.getElementById("fullamount").value=parseInt(amount);
            $( "#paymentcost2" ).text("Full Payment Cost Rs :"+amount);
            $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);
             
         }
        });
}

 $('#temple').change(function() {
     if($(this).is(":checked")) 
    {
      $(".chbx").show();
      $("#temple").hide();
    }else
    {
        $(".chbx").hide();
    }
})

$('input[name="vehicle1[]').change(function() {
            
         
 var all_location_id = document.querySelectorAll('input[name="vehicle1[]"]:checked');

    var aIds = [];
    
    for(var x = 0, l = all_location_id.length; x < l;  x++)
    {
        aIds.push(all_location_id[x].value);
    }
    
    var str = aIds.join(',');
    
    //console.log(str);
    var sum = 0;

    for(var i=0; i < aIds.length; i++){
    
        sum += parseInt(aIds[i]);
    
    }
    
    //console.log(sum);
    var aaa=sum;
    document.getElementById("tempac").value=sum;
    var tempackage=$("#tempac").val();
    var pick_idrate=document.getElementById("pick_idrate").value;
    
    var pickuptimechargesrate=document.getElementById("pickuptimechargesrate").value;
    var fullamount=document.getElementById("full_amount").value;
    var pipntvalueamntrate=document.getElementById("pipntvalueamntrate").value;
    var food=$("#wfood:checked").val();
    var packagefood=$("#packagefood").val();
    var laddus=$("#laddus option:selected").val();
    var pppay=$("#pay_ladd").val();
    if(pick_idrate=="")
    {
        var pick_idrates=0;
    }else
    {
        var pick_idrates=pick_idrate;
    }
    if(packagefood=="")
    {
    var package_food=0;
    }
    else
    {
    var package_food=packagefood;
    }
    if(laddus=="")
    {
    var payprice=0;
    }else
    {
    var payprice=pppay;
    }
     if(pipntvalueamntrate=="")
    {
        
        var pipntvalueamntratess=0;
    }else
    {
        
        var pipntvalueamntratess=pipntvalueamntrate;
    }
    if(pickuptimechargesrate=="")
    {
        var pickuptimechargesratess=0;
    }else
    {
        var pickuptimechargesratess=pickuptimechargesrate;
    }
    if(food=="No Food")
    {
        
    var amount=parseInt(fullamount)+parseInt(pickuptimechargesratess)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice)-parseInt(package_food)+parseInt(tempackage);
    }else
    {
        var amount=parseInt(fullamount)+parseInt(pickuptimechargesratess)+parseInt(pick_idrates)+parseInt(pipntvalueamntratess)+parseInt(payprice)+parseInt(package_food)+parseInt(tempackage);
    }
    
    document.getElementById("fullamount").value=parseInt(amount);
    $( "#paymentcost2" ).text("Full Payment Cost Rs:"+amount);
    $( "#paymentcost1" ).text( "Advance Payment Cost Rs:"+amount/2);
    
            
       
})

 $('#third').on('click',function()
    {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    var id=third;
    var tonsure=$("#tonsure").val();
    var earpier=$("#earpier").val();
    var time=$("#time:checked").val();
    var wfood=$("#wfood:checked").val();
    var pick=$('input[name="pickup"]:checked').val();
    if(tonsure=="")
    {
        alert("Tonsure or Mottai must be filled out");
        return false;
    }
    if(earpier=="")
    {
        alert("Earpier or Mottai must be filled out");
        return false;
    }if($('input[name="timer"]:checked').length ==0)
    {
        alert("Please Select Pickup Time Charges");
        return false;
    }if($('input[name="food"]:checked').length ==0)
    {
        alert("Please Select Food");
        return false;
    }if($('input[name="pickup"]:checked').length ==0)
    {
        alert("Please Select Pickup Point");
        return false;
    }
    if($('input[name="payment"]:checked').length ==0)
    {
        alert("Please Select Payment Type");
        return false;
    }
    changehref2();
    
    if(id)
    {
        //alert(id);
        fnCalculate();
    }
});

function changehref2()
{
    
    var oldUrl = $("#three").attr("href"); 
    // Get current url
    var newUrl = oldUrl.replace("#", "#step3"); // Create new url
    $("#three").attr("href", newUrl); 
    var oldUrl1 = $("#four").attr("href"); 
    // Get current url
    var newUrl1 = oldUrl1.replace("#", "#step4"); // Create new url
    $("#four").attr("href", newUrl1); 
    // Set herf value
}

function fnCalculate()
{
    var d = new Date();
    var d1=d.getDate();
    var d2=d.getMonth()+1;
    //alert(d2);
    var d3=d.getFullYear();
    var d4=d1+'-'+d2+'-'+d3;
    //alert("d--"+d4);
    var AmtToPay = 0;
    var PickupCharge = 0;
    var addTripsTotal = 0;
    var Discount = $("#Discount").val() === undefined ? "0" : $("#Discount").val();
    var paymode = "Full";
    var Tickets = $("#Tickets").val();
    var priceless=$("#priceless").val();
    var ticketamount = $("#price:checked").val();
    var PackageAmount = $("#fullamount").val();
    //PackageAmount = parseInt(PackageAmount) * parseInt(Tickets);
    var price=$("#price:checked").val();
    var paymentcost=$("#paymentcost:checked").val();
    if(paymentcost=="Full Payment Cost")
    {
        var payment=$("#fullamount").val();
        var balpayment="Nil";
        var service=(parseInt(payment)/100)*parseInt(3);
        document.getElementById("servicscharge").value=service;
    }else
    {
        var payment=parseInt($("#fullamount").val())/parseInt(2);
        var balpayment=parseInt($("#fullamount").val())-parseInt(payment);
        var service=(parseInt(payment)/100)*parseInt(3);
        document.getElementById("servicscharge").value=service;
    }
    var carr=$("#carrr_pack").val();
    
    var wfood=$("#wfood:checked").val();
    
    if(wfood=="No Food")
    {
        chilfood="Nil";
    }else
    {
        chilfood=$("#packagefood").val();
    }

    var pipntvalueamntrate=$("#pipntvalueamntrate").val();
    
    if(pipntvalueamntrate=="")
    {
        pipntvalueamntrates=0;
    }else
    {
        pipntvalueamntrates=pipntvalueamntrate;
    }
    
    var contentConfirm =`<div class="col-lg-6 col-sm-12" >
                    <table class="table table-bordered">
                        <thead>
                            <tr style="height: 47px;">
                               
                                <th scope="col"></th>
                                <th scope="col"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                              <tr>
                                
                                <td><b>Booking ID:</b></td>
                               <td>1</td>
                              </tr>
                              <tr>
                               
                                <td><b>Bill To:</b></td>
                               <td>`+$("#Name1").val()+`</td>
                              </tr>
                              <tr>
                                
                                <td><b>Mobile Number :</b></td>
                                <td>`+$("#MobileNo").val()+`</td>
                              </tr> 
                              <tr>
                                
                                <td><b>Whatsapp Number :</b></td>
                                <td>`+$("#optMobileNo").val()+`</td>
                              </tr> 
                              <tr>
                               
                                <td><b>Email :</b></td>
                                <td>`+$("#Email").val()+`</td>
                              </tr> 
                              <tr>
                            
                                <td><b>Pickup Address :</b></td>
                                <td>`+$("#address").val()+`</td>
                               
                              </tr>  
                            
                              <tr>
                                
                                <td><b>Booked Date:</b></td>
                                <td>`+d4+`</td>
                              </tr>  
                              <tr>
                           
                                <td><b>Darshan Date:</b></td>
                                <td>`+$("#JourneyDate").val()+`</td>
                              </tr>   
                              <tr>
                         
                                <td><b>Darshan Time :</b></td>
                                <td>`+$("#time option:selected").text()+`</td>
                               </tr> 
                              <tr>
                               
                                <td><b>No Of Persons :</b></td>
                                <td>`+priceless+`</td>
                              </tr> 
                               
                              <tr>
                               
                                <td><b>Car Type :</b></td>
                                <td>`+carr+`</td>
                              </tr> 
                               
                                
                                 
                               
                          
                        </tbody>
                    </table>
                </div>
                 <div class="col-lg-6 col-sm-12" >
                         <table class="table table-bordered">
                        <thead>
                            <tr style="height: 47px;">
                             
                                <th scope="col"></th>
                                <th scope="col"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                              <tr>
                               
                                <td><b>Ticket Type:</b></td>
                               <td>`+$("#ticket_type:checked").val()+` Rs Darshan Ticket</td>
                              </tr>
                              <tr>
                             
                                <td><b>Package Amount:</b></td>
                               <td>`+ticketamount+`</td>
                              </tr>
                              <tr>
                               
                                <td><b>Food :</b></td>
                                <td>`+$("#wfood:checked").val()+`</td>
                              </tr> 
                              <tr>
                              
                                <td><b>Children Food :</b></td>
                                <td>`+chilfood+`</td>
                              </tr> 
                              <tr>
                               
                                <td><b>Pickup Time Charges(Driver Bata):</b></td>
                                <td>`+$("#pickuptimechargesrate").val()+`</td>
                              </tr> 
                              <tr>
                            
                                <td><b>Pickup Point(1 or more Pickup Charges):</b></td>
                                <td>`+pipntvalueamntrates+`</td>
                               
                              </tr>  
                            
                              <tr>
                             
                                <td><b>Pickup Charges(Out OF city):</b></td>
                                <td>`+$("#pick_idrate").val()+`</td>
                              </tr>  
                              <tr>
                                
                                <td><b>Extra Laddus:</b></td>
                                <td>`+$("#pay_ladd").val()+`</td>
                              </tr>   
                              <tr>
                             
                                <td><b>Additional Package :</b></td>
                                <td>`+$("#tempac").val()+`</td>
                               </tr> 
                              <tr>
                               
                                <td><b>Service Charges :</b></td>
                                <td>`+service+`</td>
                              </tr> 
                               
                              <tr>
                             
                                <td><b>Payable Amount :</b></td>
                                <td>`+payment+`</td>
                              </tr> 
                              <tr>
                             
                                <td><b>Balance Amount :</b></td>
                                <td>`+balpayment+`</td>
                              </tr>  
                                
                                 
                               
                          
                        </tbody>
                    </table>
                </div>`;
    
    $("#contentConfirm").html(contentConfirm);
    drawTable();
    var arr = [];
    $.each($("#vehicle1:checked"), function(i){
        
      arr.push($(this).next().text());
      console.log(arr);
    });
    
    var contentPackage=`<div class="col-lg-6 col-sm-12" >
                         <table class="table table-bordered">
                        <thead>
                            <tr style="height: 47px;">
                             
                                <th scope="col"></th>
                                <th scope="col"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                              <tr>
                              <td>Additional Temple Package</td>
                               <td>`+arr.join("<br>")+`</td>
                              </tr>
                              <tr>
                              <td>PickUp Charges</td>
                               <td>`+$("#pickup_chargeamnt option:selected").text()+`</td>
                              </tr>
                         </tbody>
                    </table>
                </div>`;
       $("#contentPackage").html(contentPackage);         
}
function drawTable() {
    var copiedTable = "";
    $("#clonetable").html("");
    if ($('#MainTable tbody tr').length > 0) {
        copiedTable =
            `<table width="100%" class="table table-striped table-bordered" >                                
                            <thead>
                                <tr>
                                    <th width="30%">Name</th>  
                                    <th width="10%">Age</th>                                                                           
                                    <th width="15%">Gender</th>
                                    <th width="20%">Proof</th>                                        
                                    <th width="25%">Proof No</th>
                                </tr>
                            </thead>
                            <tbody>`;

        $('#MainTable tbody tr').each(function() {
            copiedTable = copiedTable + "<tr>";
            copiedTable = copiedTable + '<td>' + $("#" + $(this).find("td").eq(1).find(
                "input").attr('id')).val() + '</td>';
            copiedTable = copiedTable + '<td>' + $("#" + $(this).find("td").eq(2).find(
                "input").attr('id')).val() + '</td>';
            copiedTable = copiedTable + '<td>' + $(this).find("td").eq(3).find("select").val() +
                '</td>';
            copiedTable = copiedTable + '<td>' + $(this).find("td").eq(4).find("select").val() +
                '</td>';
            copiedTable = copiedTable + '<td>' + $("#" + $(this).find("td").eq(5).find(
                "input").attr('id')).val() + '</td>';
            copiedTable = copiedTable + "</tr>";
        });

        copiedTable = copiedTable + "</tbody>";
        copiedTable = copiedTable + "</table>";
    }

    $("#clonetable").html(copiedTable);
}

/*Save Data*/
                    
 function fnConfirm(id) {
                        
    if ($('#Confirmation').is(":checked")) {
        var cname=$("#cname").val();
        var JourneyDate=$("#JourneyDate").val();
        var time=$("#time").val();
        var Email=$("#Email").val();
        var address=$("#address").val();
        var MobileNo=$("#MobileNo").val();
        var optMobileNo=$("#optMobileNo").val();
        var laddus=$("#laddus").val();
        var Tickets=$("#priceless").val();
        var price=$("#price:checked").val();
        var tonsure=$("#tonsure").val();
        var earpier=$("#earpier").val();
        var timer=$("#timer:checked").val();
        var wfood=$("#wfood:checked").val();
        var pick=$("#pick:checked").val();
        var paymentcost=$("#paymentcost:checked").val();
        var outsidelimit=$("#outsidelimit").val();
        var laddus=$("#laddus").val();
        var fullamount=$("#fullamount").val();
        var lessamount=$("#lessamount").val();
        var lflamount=$("#lflamount").val();
        var servicecharge=$("#servicscharge").val();
        var pipntvalue=$("#pipntvalue").val();
        var d = new Date();
        var d1=d.getDate();
        var d2=d.getMonth();
        var d3=d.getFullYear();
        var d4=d1+'/'+d2+'/'+d3;
        var ticket_type=$("#ticket_type:checked").val();
        var chargerate=$("#pickup_chargeamnt").val();
        var tempac=$("#tempac").val();
        var chfoodvalue=$("#chfoodvalue").val();
        $.ajax
        ({
            type:'post',
            url:'book.php',
            data:
            {
               cname:cname,
               JourneyDate:JourneyDate,
               time:time,
               Email:Email,
               address:address,
               MobileNo:MobileNo,
               optMobileNo:optMobileNo,
               laddus:laddus,
               Tickets:Tickets,
               price:price,
               tonsure:tonsure,
               earpier:earpier,
               timer:timer,
               wfood:wfood,
               pick:pick,
               paymentcost:paymentcost,
               outsidelimit:outsidelimit,
               laddus:laddus,
               d4:d4,
               fullamount:fullamount,
               lessamount:lessamount,
               lflamount:lflamount,
               ticket_type:ticket_type,
               chargerate:chargerate,
               servicecharge:servicecharge,
               pipntvalue:pipntvalue,
               tempac:tempac,
               chfoodvalue:chfoodvalue,
               
            },
            success:function(msg)
            {
                console.log(msg);
                finalsave(msg);
                temple(msg);
                var pay=msg;
                window.location.href="darshanTicketConf.php?id="+pay;
            }
        });
    }else
    {
        alert("Please Click the terms and conditions");
        
    }
}
        
        
function temple(msg)
{
    var arr = [];
    $.each($("#vehicle1:checked"), function(i){
        
      arr.push($(this).next().text());
      
    });
    var id=msg;
    var tempack=arr.join(",");
   // alert(tempack);
    $.ajax({
        type:'post',
        url:'tem_package.php',
        data:
        {
            tempack:tempack,
            id:id,
        },
        success:function(result)
        {
            console.log(result);
        }
    })
}
function finalsave(msg)
{
    var id=msg;
    
    var Tickets=$("#priceless").val();
    for (var cnt = 1; cnt <= Tickets; cnt++) {
    
    var name=document.getElementById("Name"+cnt).value;
    
    var age=document.getElementById("Age"+cnt).value;
    var Gender=document.getElementById("Gender"+cnt).value;
    var Proof=document.getElementById("Proof"+cnt).value;
    var ProofNo=document.getElementById("ProofNo"+cnt).value;
    
    
    
    $.ajax
    ({
    type:'post',
    url:'book1.php',
    data:
    {
    id:id,
    Tickets:Tickets,
    name:name,
    age:age,
    Gender:Gender,
    Proof:Proof,
    ProofNo:ProofNo
    },
    success:function(msg)
    {
    console.log(msg);
    
    }
    });
    }
}

function getpackage(idd,car)
{

window.location.href="package-booking.php?rate="+idd+"&car="+car;

}