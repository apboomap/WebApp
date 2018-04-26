
  // Get the modal
//   var lave = document.getElementById('lave year');
//   var feb = document.getElementById('2');
//   var id = document.getElementById('year');
// function checkPasscode(year){
//     if(year != "2017"){
//         year.setCustomValidity("Wrong. It's ''.");
//     }
    
// }
// function leapYear(year){
//     var result; 
//     year = parseInt(document.getElementById("isYear").value);
//     if (years/400){
//       result = true
//     }
//     else if(years/100){
//       result = false
//     }
//     else if(years/4){
//       result= true
//     }
//     else{
//       result= false
//     }
//     return result
//  }

// function leapYear(year){
//     var result; 
//     var passcode_input = document.querySelector("#passcode");
//     for(value="1918";value<="2018";value++){
//         if (value/400){
//             result = true
//           }
//           else if(value/100){
//             result = false
//           }
//           else if(value/4){
//             result= true
//           }
//           else{
//             result= false
//           }
//           return result
//     }
	
// 	if (passcode_input.value/4 == 0) {
// 		passcode_input.setCustomValidity("It Year is Lape Year.");
// 	} else {
// 		passcode_input.setCustomValidity(""); // be sure to leave this empty!
// 		alert("Correct!");
// 	}
//  }
 

//  function check_leapyear(){
//     //define variables
//     var year;

//     //get the entered year from text box 
//     year = document.getElementById("year").value;

//     //three conditions to find out the leap year
//     if( (0 == year % 4) && (0 != year % 100) || (0 == year % 400) )
//     {
//         alert(year+" is a leap year");  
//     }
//     else
//     {
//         alert(year+" is not a leap year");  
//     }
// }
  

function checkYear() {
    var year_input = document.querySelector("#idyear");
    var month_input = document.querySelector("#idmonth");
    var day_input = document.querySelector("#idday");
    
    if (year_input.value != "0") {
        if(month_input.value == 4 || month_input.value == 6 || month_input.value == 9 || month_input.value == 11){
            if(day_input.value != "31"){
                
            }
            else{
                
                // setTimeout(function(){
                //     window.location.reload(1);
                //  }, 5000);
                // window.setTimeout('window.location="";', document.getElementById('#idday'),5000);
                day_input.setCustomValidity("ในเดือนนี้ไม่มีวันที่นี้อยู่");
                
            }
        }if(month_input.value == 2){
            if(day_input.value != "29" || day_input.value != "30" || day_input.value != "31"){
                
            }
            else{
                day_input.setCustomValidity("ในเดือนนี้ไม่มีวันที่นี้อยู่");
            }
        }
    }else if(year_input.value%4 == 0 && year_input.value%100 != 0 || year_input.value%400 == 0){
        if(month_input.value == 2){
            if(day_input.value != "30" || day_input.value != "31"){
                
            }
            else{
                day_input.setCustomValidity("ในเดือนนี้ไม่มีวันที่นี้อยู่");
            }
        }
    }else {
        
    }
    
}

// function check_leapyear(value){
//     for(value=1920;value<=2016;value+=4){
//         // if (year_input.value != value1) {
//         //     if(month_input.value == "4" || month_input.value == "6" || month_input.value == "9" || month_input.value == "11"){
//         //         if(day_input.value == "31"){
//         //             day_input.setCustomValidity("ไม่มีวันที่ 31 ในเดือนนี้.");
//         //         }
//         //         else{
    
//         //         }
//         //     }
//         // } else if(year_input.value == value1){
//         //     if(month_input.value != "2"){
//         //         if(day_input.value == "30" || day_input.value == "31"){
//         //             day_input.setCustomValidity("ในเดือนนี้ไม่มีวันที่นี้อยู่.");
//         //         }
//         //         else{
    
//         //         }
//         //     }
//         // } else {
            
//         // }
//         return true;
//     }
// }
