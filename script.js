const navtons = document.querySelectorAll(".navbuttons");
navtons.forEach(element => {
    element.addEventListener("mouseover",function(){element.classList.add("atoggle");});
});
navtons.forEach(element => {
    element.addEventListener("mouseout",function(){element.classList.remove("atoggle");});
});
const cards = document.querySelectorAll(".buildcard");
cards.forEach(element => {
    element.addEventListener("click",function(){element.classList.toggle("cardenlarge");});
});
const nav1 = document.getElementById("nav1");
const nav2 = document.getElementById("nav2");
const nav3 = document.getElementById("nav3");
document.addEventListener("keypress",
function(e){
    if(e.key === "1")
    {nav1.classList.toggle("atoggle");}
    if(e.key === "2")
    {nav2.classList.toggle("atoggle");}
    if(e.key === "3")
    {nav3.classList.toggle("atoggle");}
});
const un = document.querySelectorAll(".un");
un.forEach(element => {
    element.addEventListener("keyup",() => { element.style.color = "blue"; })}
);
un.forEach(element => {
    element.addEventListener("keydown",function(){element.style.color="red";})}
);
let string = "I am being Counted and i dont like it";
function count(s){
    console.log("For String: " + s);
    s=s.toLowerCase();
    let length = s.length;
    let vowelCount = 0;
    let consCount = 0;
    let spacesCount = 0;
    for(let i=0;i<length;i++){
        if(s[i]==='a'||s[i]==='e'||s[i]==='i'||s[i]==='o'||s[i]==='u'){
            vowelCount++;
        }
        else if(s[i]===" "){
            spacesCount++;
        }
        else{
            consCount++;
        }
    }
    console.log("\nVowel Count: "+ vowelCount +"\nConsonent Count: "+ consCount+"\nSpaces Count: " + spacesCount);
}
count(string);

function findSecondLargest(arr){
    let largest=0;
    let secondLargest = 0;
    if(arr.length===1){
        console.log("Only one element in array :"+arr[0]);
        return;
    }
    if(arr.length===2){
        if(arr[0]<arr[1]){
        secondLargest = arr[0];
        }
        else{
            secondLargest = arr[1];
        }
        console.log("Only two element in array:" + secondLargest);
        return;
    }
    
    for(let i=0;i<arr.length;i++){
        if(largest < arr[i]){
            secondLargest = largest;
            largest = arr[i];
        }
        else if(secondLargest < arr[i]){
            secondLargest = arr[i];
        }
    }
    console.log("Second Largest: "+ secondLargest);
}
let array = [50,40,70,90,60,100,120,101,102,200];
findSecondLargest(array);

function CheckLeap(input){
    let next;
    if(input%400===0){
        console.log(" is Leap");
        next = input +4;
        console.log("Next Leap Year :"+ next);
        return;
    }
    if(input%100===0){
        console.log(" is Not Leap");
        next = input +4;
        console.log("Next Leap Year :"+ next);
        return;
    }
    if(input%4===0){
        console.log("is Leap");
        next = input +4;
        console.log("Next Leap Year :"+ next);
        return;
    }
    console.log(" is Not Leap");
}

CheckLeap(2020);