function addDay1() {
  // Find selected meal
  let ddown = document.getElementById("mealNumbSelection");
  let mealNumber = ddown.options[ddown.selectedIndex].value;
  console.log(mealNumber);
  // Find selected tab ID / day
  let activeTab = $(".tab-content").find(".active");
  let dayNumber = activeTab.attr('id');
  console.log(dayNumber);
  // Add the ingredient
  let ingredient = document.getElementById("ingName").value;
  console.log(ingredient);
  let ingToAdd = document.createElement("li");
  ingToAdd.textContent = ingredient;
  let ulID = dayNumber + mealNumber;
  console.log(ulID);
  document.getElementById(ulID).appendChild(ingToAdd);
}