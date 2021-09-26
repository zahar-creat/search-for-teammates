let date = new Date();
let offset = date.getTimezoneOffset();
let hours = -(offset / 60);
let hoursStr = hours >= 0 ? `+${hours.toString()}` : hours.toString();
let UTC = `UTC${hoursStr}`;
let input = document.getElementById("time_zone");
input.value = UTC;

function fixage() {
  let age = document.getElementById("age");
  let number = age.value;
  number = number < 10 ? 10 : number;
  number = number > 60 ? 60 : number;
  age.value = number;

}

