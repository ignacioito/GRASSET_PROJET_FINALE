// Searchform
var ingredients = [
  "Banane (Moyenne)",
  "Boeuf 100g",
  "Boeuf 300g",
  "haricots 100g",
  "haricots 200g",
  "Poulet 200g",
  "Poulet 400g"
];

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
    var a,
      b,
      i,
      val = this.value;
    /*close any already open lists of autocompleted values*/
    closeAllLists();
    if (!val) {
      return false;
    }
    currentFocus = -1;
    /*create a DIV element that will contain the items (values):*/
    a = document.createElement("DIV");
    a.setAttribute("id", this.id + "autocomplete-list");
    a.setAttribute("class", "autocomplete-items");
    /*append the DIV element as a child of the autocomplete container:*/
    this.parentNode.appendChild(a);
    /*for each item in the array...*/
    for (i = 0; i < arr.length; i++) {
      /*check if the item starts with the same letters as the text field value:*/
      if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
        /*create a DIV element for each matching element:*/
        b = document.createElement("DIV");
        /*make the matching letters bold:*/
        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
        b.innerHTML += arr[i].substr(val.length);
        /*insert a input field that will hold the current array item's value:*/
        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
        /*execute a function when someone clicks on the item value (DIV element):*/
        b.addEventListener("click", function(e) {
          /*insert the value for the autocomplete text field:*/
          inp.value = this.getElementsByTagName("input")[0].value;
          /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
          closeAllLists();
        });
        a.appendChild(b);
      }
    }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
    var x = document.getElementById(this.id + "autocomplete-list");
    if (x) x = x.getElementsByTagName("div");
    if (e.keyCode == 40) {
      /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
      currentFocus++;
      /*and and make the current item more visible:*/
      addActive(x);
    } else if (e.keyCode == 38) {
      //up
      /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
      currentFocus--;
      /*and and make the current item more visible:*/
      addActive(x);
    } else if (e.keyCode == 13) {
      /*If the ENTER key is pressed, prevent the form from being submitted,*/
      e.preventDefault();
      if (currentFocus > -1) {
        /*and simulate a click on the "active" item:*/
        if (x) x[currentFocus].click();
      }
    }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = x.length - 1;
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function(e) {
    closeAllLists(e.target);
  });
}

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("ingNameDay1"), ingredients);
autocomplete(document.getElementById("ingNameDay2"), ingredients);

//

//Calculate Basal Metabolism Rate with Harris–Benedict equation and macronutrients
let bmr;
let gender = document.getElementById("gender").innerHTML;
let age = document.getElementById("age").innerHTML;
let height = document.getElementById("height").innerHTML;
let weight = document.getElementById("weight").innerHTML;

if (gender == "M") {
  bmr = Math.round(66.5 + 13.75 * weight + 5.003 * height - 6.755 * age);
} else {
  bmr = Math.round(655.1 + 9.563 * weight + 1.85 * height - 4.676 * age);
}

let dayProteins = Math.round((bmr * 20) / 100);
let dayLipids = Math.round((bmr * 20) / 100);
let dayCarbohydrates = Math.round((bmr * 60) / 100);
// Show in Info client
document.getElementById("dayCalories").innerHTML = bmr;
// Show in Day1
document.getElementById("day1Calories").innerHTML = bmr;
document.getElementById("day1Proteins").innerHTML = dayProteins;
document.getElementById("day1Lipids").innerHTML = dayLipids;
document.getElementById("day1Carbohydrates").innerHTML = dayCarbohydrates;

// Day1
function addDay1() {
  // Check if ingredient exists
  let ingredient = document.getElementById("ingNameDay1").value;
  console.log("Ingredient : " + ingredient);
  let ingExists = false;
  function isIngExisting() {
    for (var i = 0; i < ingredients.length; i++) {
      if (ingredient.toUpperCase() == ingredients[i].toUpperCase()) {
        ingExists = true;
        break;
      }
    }
  }
  isIngExisting();
  console.log("Is the ingredient existing : " + ingExists);
  if (ingExists) {
    // Find selected meal
    let ddown = document.getElementById("mealNumbSelection1");
    let mealNumber = ddown.options[ddown.selectedIndex].value;
    console.log(mealNumber);
    // Assign selected day
    let dayNumber = "day1";
    // Add the ingredient
    console.log(ingredient);
    let ingToAdd = document.createElement("li");
    ingToAdd.textContent = ingredient;
    let ulID = dayNumber + mealNumber;
    console.log(ulID);
    document.getElementById(ulID).appendChild(ingToAdd);
    document.getElementById("ingNameDay1").value = "";
  } else if (ingredient == "") {
    alert("Veuillez insérer un ingrédient");
  } else {
    alert(
      "L'ingrédient \"" +
        ingredient +
        "\" n'existe pas. Merci de choisir un des aliments proposés"
    );
    document.getElementById("ingNameDay1").value = "";
  }
  //
}

// Day2
function addDay2() {
  // Find selected meal
  let ddown = document.getElementById("mealNumbSelection2");
  let mealNumber = ddown.options[ddown.selectedIndex].value;
  console.log(mealNumber);
  // Assign selected day
  let dayNumber = "day2";
  // Add the ingredient
  let ingredient = document.getElementById("ingNameDay2").value;
  console.log(ingredient);
  let ingToAdd = document.createElement("li");
  ingToAdd.textContent = ingredient;
  let ulID = dayNumber + mealNumber;
  console.log(ulID);
  document.getElementById(ulID).appendChild(ingToAdd);
}
