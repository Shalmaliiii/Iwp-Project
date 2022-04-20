function fill(data,state, dist){ 
    var s1 = document.getElementById(state);
    var s2 = document.getElementById(dist);
    s2.innerHTML = "";
    {
        var newOption = document.createElement("option");
        newOption.value = 0;
        newOption.innerHTML = "District";
        newOption.disabled = true;
        newOption.selected = true;
        s2.options.add(newOption);
    }
    for (var i=0; i<data.states[s1.value-1].districts.length; i++){
        var newOption = document.createElement("option");
        newOption.value = data.states[s1.value-1].districts[i];
        newOption.innerHTML = data.states[s1.value-1].districts[i];
        s2.options.add(newOption);
    }
    console.log("Done");
}

async function getData(state, dist){
    const response = await fetch("location.json");
    const data = await response.json();
    fill(data, state, dist); 
}

function populate(state,dist) {
    getData(state, dist);
}