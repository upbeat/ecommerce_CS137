function getTime()
{
  var d = new Date();
  document.getElementById("demo").innerHTML = "Today is " + d.toDateString() + "!";
}
