function addDay1() {
  // Find selected meal
  let ddown = document.getElementById("mealNumbSelection1");
  let mealNumber = ddown.options[ddown.selectedIndex].value;
  console.log(mealNumber);

  // // Find selected tab ID / day
  // let activeTab = $(".tab-content").find(".active");
  // let dayNumber = activeTab.attr('id');
  // console.log(dayNumber);

  // Assign selected day
  let dayNumber = "day1";
  // Add the ingredient
  let ingredient = document.getElementById("ingName1").value;
  console.log(ingredient);
  let ingToAdd = document.createElement("li");
  ingToAdd.textContent = ingredient;
  let ulID = dayNumber + mealNumber;
  console.log(ulID);
  document.getElementById(ulID).appendChild(ingToAdd);
}

function addDay2() {
  // Find selected meal
  let ddown = document.getElementById("mealNumbSelection2");
  let mealNumber = ddown.options[ddown.selectedIndex].value;
  console.log(mealNumber);
  // Assign selected day
  let dayNumber = "day2";
  // Add the ingredient
  let ingredient = document.getElementById("ingName2").value;
  console.log(ingredient);
  let ingToAdd = document.createElement("li");
  ingToAdd.textContent = ingredient;
  let ulID = dayNumber + mealNumber;
  console.log(ulID);
  document.getElementById(ulID).appendChild(ingToAdd);
}