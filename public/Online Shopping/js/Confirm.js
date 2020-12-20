 /*Start Section Confirmatio*/
    
    var Name = document.getElementById("text1"),
        Address = document.getElementById("text2"),
        City = document.getElementById("text3"),
        State = document.getElementById("Select1"),
        zipCode = document.getElementById("text4"),
        Country = document.getElementById("Select2") ,
        Phone = document.getElementById("text5"),
        SendInfo = document.getElementById("SendInfo");
    var ObjectOfList = document.getElementsByClassName("list");
    
    function SendInormation() {
      ObjectOfList[0].textContent = Name.value; 
      ObjectOfList[1].textContent = Address.value; 
      ObjectOfList[2].textContent = City.vlaue;
      ObjectOfList[3].textContent = State.options[State.selectedIndex].value;
      ObjectOfList[4].textContent = zipCode.value; 
      ObjectOfList[5].textContent = Country.options[Country.selectedIndex].value;
      ObjectOfList[6].textContent = Phone.value;
    }
    /*End Section Confirmatio*/


/*Start Section Payments*/

var  Checkbox1 = document.getElementById('Checkbox1'),
    Checkbox2 = document.getElementById('Checkbox2'),
    PaymentList = document.getElementsByClassName('payment');
function MyPayment(){
    "use strict";
    if(Checkbox1.value == 'Master Card' && Checkbox1.checked) {
        PaymentList[0].innerHTML = '<img src="image/master.jpg" style="width:40px; height:30px; margin-Bottom:15px">' + " <b>" + Checkbox1.value + " </b>" + "Ending In 4147";
        
    } else if(Checkbox2.value == 'Master Card' && Checkbox2.checked) {
         PaymentList[0].innerHTML = '<img src="image/master.jpg" style="width:40px; height:30px; margin-Bottom:15px">' + " <b>" + Checkbox1.value + " </b>" + "Endin In 5986";
        
    } else if(Checkbox1.checked && Checkbox2.checked){
     alert("You Must Select one Deposit Way");   
    }
    else{
        alert("You Not Select Any Deposit Way,Plz Select One Way");
    }
}

/*End Section Payments*/
/*var Total = document.getElementById("total"),
    TotalPayments = document.getElementById("TotalPayments"),
    Btn = document.getElementById("Button-Add");
SendInfo.onclick = function () {
  TotalPayments.innerHTML = Total.value;  
};*/
