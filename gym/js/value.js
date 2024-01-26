function calculerBy()
{
        num1 = document.getElementById("slider2").value;
        if(num1<6){
         document.getElementById("result").innerHTML = 200*num1;
        }
        if(num1<=11 && num1>=6){
         document.getElementById("result").innerHTML = 200*num1-200*num1*0.15;
        }
        if(num1<6){
         document.getElementById("result").innerHTML = 200*num1;
        }
        if(num1==12){
         document.getElementById("result").innerHTML = 1900;
        }
}